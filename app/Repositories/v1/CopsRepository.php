<?php

namespace App\Repositories\v1;

use App\Models\v1\Cops;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class CopsRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $obj = [];
    protected $returnType = 'error';
    protected $returnMsg = '';
    protected $returnContent = '';
    protected $statusCode = 400;
    protected $options = 0;
    protected $perPage = 25;
    
	public function __construct( Cops $model )
	{
		$this->model = $model;
    }

    public function searchGet($request, "GET")
    {
        $page = false,
        if (isset($data['page'])) { 
            $page = $data['page']; 
            unset( $data['page']); 
        }
        if (isset($data['per_page'])) { 
            $this->perPage = $data['per_page']; 
            unset( $data['per_page']); 
        }

        $query = $this->service->query($this->model, $request, "GET");

        try{
            if ($page) $response = $query->paginate($this->perPage, ['*'], 'page', $page);
            else $response = $query->get();

            $this->returnData = $response ? $response : [];
            $this->statusCode = 200;
            $success = true;
        } catch(\Throwable $th) {
            $this->errorMessage = $th->getMessage();
            $success = false;
        }

        return $this->mountReturn('load', $this->returnData, $this->statusCode, $this->contentError);
    }

    public function searchPost($request, "POST")
    {
        $page = false,
        if (isset($data['page'])) { 
            $page = $data['page']; 
            unset( $data['page']); 
        }
        if (isset($data['per_page'])) { 
            $this->perPage = $data['per_page']; 
            unset( $data['per_page']); 
        }

        $query = $this->service->query($this->model, $request, "GET");

        try{
            if ($page) $response = $query->paginate($this->perPage, ['*'], 'page', $page);
            else $response = $query->get();

            $this->returnData = $response ? $response : [];
            $this->statusCode = 200;
            $success = true;
        } catch(\Throwable $th) {
            $this->errorMessage = $th->getMessage();
            $success = false;
        }

        return $this->mountReturn('load', $this->returnData, $this->statusCode, $this->contentError);
    }
}