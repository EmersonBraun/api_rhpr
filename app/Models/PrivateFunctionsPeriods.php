<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privatefunctionsperiods extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'private_functions_periods';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'hr_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hr_id',
        'period',
        'start_date',
        'end_date',
        'function_id',
        'form_act',
        'change',
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