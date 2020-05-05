<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
class Effective extends Model
{
    /**
     * When models are soft deleted, they are not actually removed from your database. 
     * Instead, a deleted_at attribute is set on the model and inserted into the database. 
     * If a model has a non-null deleted_at value, the model has been soft deleted
     */
    // use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'effective';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = '';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta4_id',
        'period',
        'start_date',
        'first_name',
        'rg',
        'class',
        'opm_id',
        'opm_address',
        'city_id',
        'city',
        'opm_meta4',
        'opm_description',
        'position',
        'group',
        'subgroup',
        'reference_id',
        'function_id',
        'function',
        'birth_date',
        'gender_id',
        'gender',
        'email_meta4',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast to \Carbon.
     *
     * @var array
     */
    protected $dates = [];

}