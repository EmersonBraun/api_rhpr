<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['prefix' =>'v0','middleware' => 'jwt.verify],function(){
//     Route::group(['as'=>'ausencia.','prefix' =>'ausencia'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\AusenciaController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\AusenciaController@searchPost']);
//     });
//     Route::group(['as'=>'dependentes_ativa.','prefix' =>'dependentes_ativa'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\DependentesAtivaController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\DependentesAtivaController@searchPost']);
//     });
//     Route::group(['as'=>'dependentes_inativo.','prefix' =>'dependentes_inativo'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\DependentesInativoController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\DependentesInativoController@searchPost']);
//     });
//     Route::group(['as'=>'efetivo_pmpr.','prefix' =>'efetivo_pmpr'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\EfetivoPmprController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\EfetivoPmprController@searchPost']);
//     });
//     Route::group(['as'=>'efetivo_pracas.','prefix' =>'efetivo_pracas'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\EfetivoPracasController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\EfetivoPracasController@searchPost']);
//     });
//     Route::group(['as'=>'funcoes_privativas.','prefix' =>'funcoes_privativas'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\FuncoesPrivativasController@searchGet']); 
//         Route::post('',['as' =>'search-post','uses'=>'v0\FuncoesPrivativasController@searchPost']); 
//     });
//     Route::group(['as'=>'func_priv.','prefix' =>'func_priv'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\FuncPrivController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\FuncPrivController@searchPost']);
//     });
//     Route::group(['as'=>'inativos.','prefix' =>'inativos'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\InativoController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\InativoController@searchPost']);
//     });
//     Route::group(['as'=>'opm_imp_meta4.','prefix' =>'opm_imp_meta4'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\OpmImpMeta4Controller@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\OpmImpMeta4Controller@searchPost']);
//     });
//     Route::group(['as'=>'policial.','prefix' =>'policial'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\PolicialController@searchGet']); 
//         Route::post('',['as' =>'search-post','uses'=>'v0\PolicialController@searchPost']); 
//     });
//     Route::group(['as'=>'policial_historico.','prefix' =>'policial_historico'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\PolicialHistoricoController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\PolicialHistoricoController@searchPost']);
//     });
//     Route::group(['as'=>'reserva.','prefix' =>'reserva'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\ReservaController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\ReservaController@searchPost']);
//     });
//     Route::group(['as'=>'opm_pmpr.','prefix' =>'opm_pmpr'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\OpmPmprController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\OpmPmprController@searchPost']);
//     });
//     Route::group(['as'=>'pm_cm.','prefix' =>'pm_cm'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\PmCmController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\PmCmController@searchPost']);
//     });
//     Route::group(['as'=>'posto.','prefix' =>'posto'],function(){
//         Route::get('',['as' =>'search-get','uses'=>'v0\PostoController@searchGet']);
//         Route::post('',['as' =>'search-post','uses'=>'v0\PostoController@searchPost']);
//     });
// });
Route::group(['prefix' =>'v1'],function(){
    Route::group(['as'=>'absence.','prefix' =>'absence'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\AbsenceController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\AbsenceController@searchPost']);
    });
    Route::group(['as'=>'active_dependents.','prefix' =>'active_dependents'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\ActiveDependentsController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\ActiveDependentsController@searchPost']);
    });
    Route::group(['as'=>'inactive_dependents.','prefix' =>'inactive_dependents'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\InactiveDependentsController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\InactiveDependentsController@searchPost']);
    });
    Route::group(['as'=>'effective.','prefix' =>'effective'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\EffectiveController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\EffectiveController@searchPost']);
    });
    Route::group(['as'=>'effective_graduates.','prefix' =>'effective_graduates'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\EffectiveGraduatesController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\EffectiveGraduatesController@searchPost']);
    });
    Route::group(['as'=>'private_functions.','prefix' =>'private_functions'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\PrivateFunctionsController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\PrivateFunctionsController@searchPost']);
    });
    Route::group(['as'=>'private_functions_periods.','prefix' =>'private_functions_periods'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\PrivatefunctionsPeriodsController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\PrivatefunctionsPeriodsController@searchPost']);
    });
    Route::group(['as'=>'inactive.','prefix' =>'inactive'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\InactiveController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\InactiveController@searchPost']);
    });
    Route::group(['as'=>'opm_meta4.','prefix' =>'opm_meta4'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\OpmMeta4Controller@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\OpmMeta4Controller@searchPost']);
    });
    Route::group(['as'=>'cops.','prefix' =>'cops'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\CopsController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\CopsController@searchPost']);
    });
    Route::group(['as'=>'historical_police.','prefix' =>'historical_police'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\HistoricalPoliceController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\HistoricalPoliceController@searchPost']);
    });
    Route::group(['as'=>'reservations.','prefix' =>'reservations'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\ReservationController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\ReservationController@searchPost']);
    });
    Route::group(['as'=>'opm.','prefix' =>'opm'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\OpmController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\OpmController@searchPost']);
    });
    Route::group(['as'=>'full_cops.','prefix' =>'full_cops'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\FullCopsController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\FullCopsController@searchPost']);
    });
    Route::group(['as'=>'positions.','prefix' =>'positions'],function(){
        Route::get('',['as' =>'search-get','uses'=>'v1\PositionController@searchGet']);
        Route::post('',['as' =>'search-post','uses'=>'v1\PositionController@searchPost']);
    });
});