<?php

namespace App\Repositories\v0;

use App\Models\v0\FuncPriv;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
use App\Services\QueryService;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class FuncPrivRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $service;
    protected $returnData = [];
    protected $returnType = 'error';
    protected $returnMsg = '';
    protected $returnContent = '';
    protected $statusCode = 400;
    protected $options = 0;
    protected $perPage = 25;
    
	public function __construct( FuncPriv $model,  QueryService $service )
	{
		$this->model = $model;
		$this->service = $service;
    }

    public function search($request)
    {
        $page = false;
        if (isset($data['page'])) { 
            $page = $data['page']; 
            unset( $data['page']); 
        }
        if (isset($data['per_page'])) { 
            $this->perPage = $data['per_page']; 
            unset( $data['per_page']); 
        }

        $query = $this->service->query($this->model, $request->all(), $request->method());

        try{
            if ($page) $response = $query->paginate($this->perPage, ['*'], 'page', $page);
            else $response = $query->get();

            $this->returnData = $response ? $response : [];
            $this->statusCode = 200;
            $success = true;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
            $success = false;
        }

        return $this->mountReturn('load', $this->returnData, $this->statusCode, $this->contentError);
    }
}