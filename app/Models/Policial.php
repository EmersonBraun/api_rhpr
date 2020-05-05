<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policial extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'POLICIAL';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_meta4';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'std_or_hr_period',
		'data_admissao',
		'nome',
		'rg',
		'classe',
		'nascimento',
		'id_sexo',
		'sexo',
		'admissao_real',
		'email_meta4',
		'funcao',
		'cargo',
		'quadro',
		'subquadro',
		'promocao',
		'referencia',
		'bairro',
		'cidade',
		'opm_descricao',
		'opm_meta4',
		'cdopm'
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
    protected $casts = [
        'id_sexo' => 'int'
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
    protected $dates = [
        'data_admissao',
		'nascimento',
		'admissao_real',
		'promocao'
    ];

}