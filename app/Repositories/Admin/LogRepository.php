<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Log;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class LogRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    
	public function __construct( Log $model )
	{
		$this->model = $model;
    }

    /**
     * Example of expecific action from LogRepositorie.
     * CRUD functions are inherited from BaseRepository
     *
     * @return array
     */
    public function example($foo, $bar)
    {
        try{
            $this->obj = $this->model->where(['name'=> $foo, 'age' => $bar])->get();
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->returnContent = $th->getMessage();
        }
        $typeFunction = 'load'; // may load,found,create,update,delete,restore or forceDelete
        return $this->mountReturn($typeFunction, $this->obj, $this->statusCode, $this->contentError);
    }
}