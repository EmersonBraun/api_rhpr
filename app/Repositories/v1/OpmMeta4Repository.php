<?php

namespace App\Repositories\v1;

use App\Models\v1\OpmMeta4;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
use App\Services\QueryService;
use App\Services\LogService;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class OpmMeta4Repository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $service;
    protected $log;
    protected $expiration = 60;
     
	public function __construct( OpmMeta4 $model,  QueryService $service, LogService $log  )
	{
		$this->model = $model;
        $this->service = $service;
        $this->log = $log;
    }

    public function search($request)
    {
        $page = $this->service->sanitizePages($request->all());
        $queryBuilder = $this->service->query($this->model, $request->all(), $request->method(), true);
        $queryMounted = $this->service->queryMounted($queryBuilder);
        $execute = $this->service->execute($queryBuilder, $page);

        $user = getUserByToken($request->token);
        $log = $this->log->store($user, $request, $queryMounted, $execute->status);
        return $this->mountReturn(
            'load', 
            $execute->data, 
            $execute->status,
            $execute->headers['contentError'],
            $showMessage=true,
            $options=0
        );
    }
}