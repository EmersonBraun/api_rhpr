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
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'AusenciaController@search']);
//     });
//     Route::group(['as'=>'dependentes_ativa.','prefix' =>'dependentes_ativa'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'DependentesAtivaController@search']);
//     });
//     Route::group(['as'=>'dependentes_inativo.','prefix' =>'dependentes_inativo'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'DependentesInativoController@search']);
//     });
//     Route::group(['as'=>'efetivo_pmpr.','prefix' =>'efetivo_pmpr'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'EfetivoPmprController@search']);
//     });
//     Route::group(['as'=>'efetivo_pracas.','prefix' =>'efetivo_pracas'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'EfetivoPracasController@search']);
//     });
//     Route::group(['as'=>'funcoes_privativas.','prefix' =>'funcoes_privativas'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'FuncoesPrivativasController@search']);     
//     });
//     Route::group(['as'=>'func_priv.','prefix' =>'func_priv'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'FuncPrivController@search']);
//     });
//     Route::group(['as'=>'inativos.','prefix' =>'inativos'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'InativoController@search']);
//     });
//     Route::group(['as'=>'opm_imp_meta4.','prefix' =>'opm_imp_meta4'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'OpmImpMeta4Controller@search']);
//     });
//     Route::group(['as'=>'policial.','prefix' =>'policial'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'PolicialController@search']); 
//     });
//     Route::group(['as'=>'policial_historico.','prefix' =>'policial_historico'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'PolicialHistoricoController@search']);
//     });
//     Route::group(['as'=>'reserva.','prefix' =>'reserva'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'ReservaController@search']);
//     });
//     Route::group(['as'=>'opm_pmpr.','prefix' =>'opm_pmpr'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'OpmPmprController@search']);
//     });
//     Route::group(['as'=>'pm_cm.','prefix' =>'pm_cm'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'PmCmController@search']);
//     });
//     Route::group(['as'=>'posto.','prefix' =>'posto'],function(){
//         Route::match(['get', 'post'], '',['as' =>'search','uses'=>'PostoController@search']);
//     });
// });
Route::group(['prefix' =>'v1'],function(){
    Route::group(['as'=>'absence.','prefix' =>'absence'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'AbsenceController@search']);
    });
    Route::group(['as'=>'active_dependents.','prefix' =>'active_dependents'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'ActiveDependentsController@search']);
    });
    Route::group(['as'=>'inactive_dependents.','prefix' =>'inactive_dependents'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'InactiveDependentsController@search']);
    });
    Route::group(['as'=>'effective.','prefix' =>'effective'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'EffectiveController@search']);
    });
    Route::group(['as'=>'effective_graduates.','prefix' =>'effective_graduates'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'EffectiveGraduatesController@search']);
    });
    Route::group(['as'=>'private_functions.','prefix' =>'private_functions'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'PrivateFunctionsController@search']);
    });
    Route::group(['as'=>'private_functions_periods.','prefix' =>'private_functions_periods'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'PrivatefunctionsPeriodsController@search']);
    });
    Route::group(['as'=>'inactive.','prefix' =>'inactive'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'InactiveController@search']);
    });
    Route::group(['as'=>'opm_meta4.','prefix' =>'opm_meta4'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'OpmMeta4Controller@search']);
    });
    Route::group(['as'=>'cops.','prefix' =>'cops'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'CopsController@search']);
    });
    Route::group(['as'=>'historical_police.','prefix' =>'historical_police'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'HistoricalPoliceController@search']);
    });
    Route::group(['as'=>'reservations.','prefix' =>'reservations'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'ReservationController@search']);
    });
    Route::group(['as'=>'opm.','prefix' =>'opm'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'OpmController@search']);
    });
    Route::group(['as'=>'full_cops.','prefix' =>'full_cops'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'FullCopsController@search']);
    });
    Route::group(['as'=>'positions.','prefix' =>'positions'],function(){
        Route::match(['get', 'post'], '',['as' =>'search','uses'=>'PositionController@search']);
    });
});