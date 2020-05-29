<?php

namespace App\Repositories\Admin;

use App\Models\Admin\User;
use App\Repositories\BaseRepository;
use App\Repositories\Admin\PermissionRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class UserRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $permission;
    
	public function __construct( 
        User $model, 
        PermissionRepository $permission 
    )
	{
		$this->model = $model;
		$this->permission = $permission;
    }

    public function getAllData($id)
    {
        try{
            $this->obj = $this->model->where('id',$id)->with(['systems','phones','emails','permissions'])->get();
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        }

        return $this->mountReturn('load', $response, $this->statusCode, $this->contentError);
    }

    public function assyncPermissions ($permissions=[], $id=null)
    {
        if (!$permissions || !$id) return false;
        
        dd($permissions);
    }

    public function getPermissionIds ($permissions)
    {
        $permissionsIds = [];
        foreach ($permissions as $permission) {
            if (!is_numeric($permission)) $idPermission = $permission;
            else $idPermission = $this->permission->getIdByName($permission);
            array_push($permissionsIds, $idPermission);
        }
        if (!count($permissionsIds)) return [];
        return $permissionsIds;
    }
}