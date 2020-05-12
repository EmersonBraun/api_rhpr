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
        $query = $this->mountQuery();
        return $query;
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
                in_array($key.'_send', $fillable)
                ) {
                $this->queryData[$key] = $value;
            }
        }
    }

    public function sanitizeModel($model) 
    {
        // if ($model instanceof Eloquent\Builder) $this->model = $model;
        // else 
        $this->model = $model;
    }
    
    public function mountQuery () {
        $query = $this->model->select();
        if (count($this->queryData)) {
            foreach ($this->queryData as $key => $value) {
                if (!is_array($value) && !strpos($value, ',')) {
                    $cleanKey = $this->cleanKey($key);
                    $operator = $this->getOperator($key);
                    $cleanVal = $this->cleanGetValue($value);
                    $query->where($cleanKey, $operator, $value);
                }
                if ($this->verbose == 'GET' && strpos($value, ',')) {
                    $array = explode(',', $value);
                    $query->whereIn($key, $array);
                } 
                if(is_array($value)) {
                    $query->whereIn($key, $value);
                }
            }
        }
        
        if (count($this->queryOrder)) {
            foreach ($this->queryOrder as $key => $value) {
                if ($key == 'limit') $query->limit((int) $value);
                if ($key == 'offset') $query->offset((int) $value);
                if ($key == 'order_by') {
                    $orderBy = $this->getOrderBy($value);
                    $query->orderBy($orderBy[0], $orderBy[1]);
                }
            }
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
        $endString = explode('_', $key);
        return $endString[count($endString)-1];
    }

    public function cleanKey($key)
    {
        $endString = $this->getEndOfKey($key);
        if ($endString == 'like') return substr($key, 0, -4);
        if ($endString == 'start') return substr($key, 0, -5);
        if ($endString == 'end') return substr($key, 0, -3);
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