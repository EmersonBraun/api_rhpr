<?php

namespace App\Repositories\Admin;

use App\Models\Admin\System;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class SystemRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    
	public function __construct( System $model )
	{
		$this->model = $model;
    }

    public function getWithUsers($id)
    {
        try{
            $this->obj = $this->model->where('id',$id)->with('users')->get();
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        }

        return $this->mountReturn('load', $response, $this->statusCode, $this->contentError);
    }
}