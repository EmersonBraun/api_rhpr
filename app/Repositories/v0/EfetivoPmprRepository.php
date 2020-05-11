<?php

namespace App\Repositories\v0;

use App\Models\v0\EfetivoPmpr;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class EfetivoPmprRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $obj = [];
    protected $returnType = 'error';
    protected $returnMsg = '';
    protected $returnContent = '';
    protected $statusCode = 400;
    protected $options = 0;
    
	public function __construct( EfetivoPmpr $model )
	{
		$this->model = $model;
    }

    /**
     * Example of expecific action from EfetivoPmprRepositorie.
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