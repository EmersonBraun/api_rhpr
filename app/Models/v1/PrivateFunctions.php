<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class Privatefunctions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'private_functions';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'start_date',
        'end_date',
        'function_id',
        'position',
        'group',
        'subgroup',
        'opm_meta4',
        'form_act',
        'vacancy',
        'observation',
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