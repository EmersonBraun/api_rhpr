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
Route::group(['prefix' =>'v0'],function(){
    Route::group(['as'=>'ausencia.','prefix' =>'ausencia'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\AusenciaController@search']);
    });
    Route::group(['as'=>'dependentes_ativa.','prefix' =>'dependentes_ativa'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\DependentesAtivaController@search']);
    });
    Route::group(['as'=>'dependentes_inativo.','prefix' =>'dependentes_inativo'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\DependentesInativoController@search']);
    });
    Route::group(['as'=>'efetivo_pmpr.','prefix' =>'efetivo_pmpr'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\EfetivoPmprController@search']);
    });
    Route::group(['as'=>'efetivo_pracas.','prefix' =>'efetivo_pracas'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\EfetivoPracasController@search']);
    });
    Route::group(['as'=>'funcoes_privativas.','prefix' =>'funcoes_privativas'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\FuncoesPrivativasController@search']); 
    });
    Route::group(['as'=>'func_priv.','prefix' =>'func_priv'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\FuncPrivController@search']);
    });
    Route::group(['as'=>'inativos.','prefix' =>'inativos'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\InativoController@search']);
    });
    Route::group(['as'=>'opm_imp_meta4.','prefix' =>'opm_imp_meta4'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\OpmImpMeta4Controller@search']);
    });
    Route::group(['as'=>'policial.','prefix' =>'policial'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\PolicialController@search']); 
    });
    Route::group(['as'=>'policial_historico.','prefix' =>'policial_historico'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\PolicialHistoricoController@search']);
    });
    Route::group(['as'=>'reserva.','prefix' =>'reserva'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\ReservaController@search']);
    });
    Route::group(['as'=>'opm_pmpr.','prefix' =>'opm_pmpr'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\OpmPmprController@search']);
    });
    Route::group(['as'=>'pm_cm.','prefix' =>'pm_cm'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\PmCmController@search']);
    });
    Route::group(['as'=>'posto.','prefix' =>'posto'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\PostoController@search']);
    });
});
Route::group(['prefix' =>'v1'],function(){
    Route::group(['as'=>'absence.','prefix' =>'absence'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\AbsenceController@search']);
    });
    Route::group(['as'=>'active_dependents.','prefix' =>'active_dependents'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\ActiveDependentsController@search']);
    });
    Route::group(['as'=>'inactive_dependents.','prefix' =>'inactive_dependents'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\InactiveDependentsController@search']);
    });
    Route::group(['as'=>'effective.','prefix' =>'effective'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\EffectiveController@search']);
    });
    Route::group(['as'=>'effective_graduates.','prefix' =>'effective_graduates'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\EffectiveGraduatesController@search']);
    });
    Route::group(['as'=>'private_functions.','prefix' =>'private_functions'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\PrivateFunctionController@search']);
    });
    Route::group(['as'=>'private_function_periods.','prefix' =>'private_function_periods'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\PrivateFunctionPeriodController@search']);
    });
    Route::group(['as'=>'inactive.','prefix' =>'inactive'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\InactiveController@search']);
    });
    Route::group(['as'=>'opm_meta4.','prefix' =>'opm_meta4'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\OpmMeta4Controller@search']);
    });
    Route::group(['as'=>'cops.','prefix' =>'cops'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\CopsController@search']);
    });
    Route::group(['as'=>'historical_police.','prefix' =>'historical_police'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\HistoricalPoliceController@search']);
    });
    Route::group(['as'=>'reservations.','prefix' =>'reservations'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\ReservationController@search']);
    });
    Route::group(['as'=>'opm.','prefix' =>'opm'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\OpmController@search']);
    });
    Route::group(['as'=>'full_cops.','prefix' =>'full_cops'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\FullCopsController@search']);
    });
    Route::group(['as'=>'positions.','prefix' =>'positions'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\PositionController@search']);
    });
});
Route::group(['prefix' =>'admin'],function(){
    Route::group(['as'=>'log.','prefix' =>'log'],function(){
        Route::get('',['as' =>'index','uses'=>'admin\LogController@index']);
        Route::post('',['as' =>'store','uses'=>'admin\LogController@store']);
        Route::get('/{id}',['as' =>'show','uses'=>'admin\LogController@show']);
        Route::put('/{id}',['as' =>'update','uses'=>'admin\LogController@update']);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'admin\LogController@destroy']);
    });
    Route::group(['as'=>'user.','prefix' =>'user'],function(){
        Route::get('',['as' =>'index','uses'=>'admin\UserController@index']);
        Route::post('',['as' =>'store','uses'=>'admin\UserController@store']);
        Route::get('/{id}',['as' =>'show','uses'=>'admin\UserController@show']);
        Route::put('/{id}',['as' =>'update','uses'=>'admin\UserController@update']);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'admin\UserController@destroy']);
    });
    Route::group(['as'=>'responsible.','prefix' =>'responsible'],function(){
        Route::get('',['as' =>'index','uses'=>'admin\ResponsibleController@index']);
        Route::post('',['as' =>'store','uses'=>'admin\ResponsibleController@store']);
        Route::get('/{id}',['as' =>'show','uses'=>'admin\ResponsibleController@show']);
        Route::put('/{id}',['as' =>'update','uses'=>'admin\ResponsibleController@update']);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'admin\ResponsibleController@destroy']);
    });
    Route::group(['as'=>'phone.','prefix' =>'phone'],function(){
        Route::get('',['as' =>'index','uses'=>'admin\PhoneController@index']);
        Route::post('',['as' =>'store','uses'=>'admin\PhoneController@store']);
        Route::get('/{id}',['as' =>'show','uses'=>'admin\PhoneController@show']);
        Route::put('/{id}',['as' =>'update','uses'=>'admin\PhoneController@update']);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'admin\PhoneController@destroy']);
    });
    Route::group(['as'=>'email.','prefix' =>'email'],function(){
        Route::get('',['as' =>'index','uses'=>'admin\EmailController@index']);
        Route::post('',['as' =>'store','uses'=>'admin\EmailController@store']);
        Route::get('/{id}',['as' =>'show','uses'=>'admin\EmailController@show']);
        Route::put('/{id}',['as' =>'update','uses'=>'admin\EmailController@update']);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'admin\EmailController@destroy']);
    });
    Route::group(['as'=>'permission.','prefix' =>'permission'],function(){
        Route::get('',['as' =>'index','uses'=>'admin\PermissionController@index']);
        Route::post('',['as' =>'store','uses'=>'admin\PermissionController@store']);
        Route::get('/{id}',['as' =>'show','uses'=>'admin\PermissionController@show']);
        Route::put('/{id}',['as' =>'update','uses'=>'admin\PermissionController@update']);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'admin\PermissionController@destroy']);
    });
});