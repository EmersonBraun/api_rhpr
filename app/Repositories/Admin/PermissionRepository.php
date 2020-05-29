<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Permission;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class PermissionRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    
	public function __construct( Permission $model )
	{
		$this->model = $model;
    }

    public function getWithUsers($id)
    {
        try{
            $this->obj = $this->model->find($id)->with('users')->first();
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        }

        return $this->mountReturn('load', $response, $this->statusCode, $this->contentError);
    }

    public function getIdByName ($permission)
    {
        // 
    }
}