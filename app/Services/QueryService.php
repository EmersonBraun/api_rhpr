<?php
namespace App\Services;

class QueryService {

    protected $queryOrder = [];
    protected $queryPagination = [];
    protected $queryData = [];
    protected $model;
    protected $verbose;

    public function query($model, $data, $verbose='GET') 
    {
        $this->sanitizeModel($model);
        $this->sanitizeData($data);
        $this->verbose = $verbose;
        $query = $this->mountQueryGet($data);
        $execute = $this->execute($query);
        return $execute;
    }

    public function sanitizeData($data) 
    {
        $ordenation = ['order_by','limit','offset'];
        $pagination = ['page','per_page'];
        $fillable = $this->model->getFillable();
        foreach ($data as $key => $value) {
            if (in_array($key, $ordenation)) array_push($this->queryOrder,[$key => $value]);
            if (in_array($key, $pagination)) array_push($this->queryPagination,[$key => $value]);
            if (
                in_array($key, $fillable) || 
                in_array($key.'_like', $fillable) || 
                in_array($key.'_start', $fillable) || 
                in_array($key.'_send', $fillable) || 
                ) {
                array_push($this->queryData,[$key => $value]);
            }
        }
    }

    public function sanitizeModel($model) 
    {
        if ($model instanceof Eloquent\Builder) $this->model = $model;
        else $this->model = $model::select();
    }
    
    public funcq ($data) {
        if ($this->verbose == 'GET') $query = $this->whereGet();
        else $query = $this->wherePost();
        
        foreach ($this->queryOrder as $key => $value) {
            if ($key == 'limit') $query->limit((int) $value);
            if ($key == 'limit') $query->offset((int) $value);
            if ($key == 'order_by') {
                $orderBy = $this->getOrderBy($value);
                $query->orderBy($orderBy[0], $orderBy[1])
            }
        }

        return $query;
    }

    public function whereGet()
    {
        $query = $this->model;

        if(strpos($val, ',')) {
            $array = explode(',', $val);
            $query->whereIn($key, $array);
        } else {
            $cleanKey = $this->cleanKey($key);
            $operator = $this->getOperator($key);
            $cleanVal = $this->cleanGetValue($val);
            $query->where($cleanKey, $operator, $val);
        }

        return $query;
    }

    public function wherePost()
    {
        $query = $this->model;

        if(is_array($val)) {
            $query->whereIn($key, $val);
        } else {
            $cleanKey = $this->cleanKey($key);
            $operator = $this->getOperator($key);
            $cleanVal = $this->cleanGetValue($val);
            $query->where($cleanKey, $operator, $val);
        }

        return $query; 
    }

    public function getOrderBy($val)
    {
        $array = strtoupper($this->verbose) == 'GET' ?  explode(',', $val) : $val;
        if (!$array[0]) $array[0] = $model->getKeyName();
        if (!$array[1] || !in_array($val, ['ASC','DESC'])) $array[1] = 'ASC';
        return $array;
    }

    public function getEndOfKey($key)
    {
        $endString = explode('_', $key)[count($key)-1];
        return $endString;
    }

    public function cleanKey($key)
    {
        $endString = $this->getEndOfKey($key);
        if ($endString == 'like') return substr($key, 0, -4);
        if ($endString == 'start') return substr($key, 0, -5)
        if ($endString == 'end') return substr($key, 0, -3)
        return $key;
    }

    public function getOperator($key)
    {
        $endString = $this->getEndOfKey($key);
        if ($endString == 'like') return 'like';
        if ($endString == 'start') return '>=';
        if ($endString == 'end') return '<=';
        return '=';
    }

    public function cleanGetValue($value)
    {
        return str_replace('+',' ',$value);
    }
}