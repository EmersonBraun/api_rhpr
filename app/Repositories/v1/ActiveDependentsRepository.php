<?php

namespace App\Repositories\v1;

use App\Models\v1\ActiveDependents;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
use App\Services\QueryService;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class ActiveDependentsRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $service;
    
	public function __construct( ActiveDependents $model,  QueryService $service )
	{
		$this->model = $model;
		$this->service = $service;
    }

    public function search($request)
    {
        $page = $this->service->sanitizePages($request->all());
        $query = $this->service->query($this->model, $request->all(), $request->method(), true);
        $execute = $this->service->execute($query, $page);

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