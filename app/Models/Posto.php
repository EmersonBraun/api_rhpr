<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posto';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'posto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_posto',
        'codigo'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_posto' => 'int'
    ];

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