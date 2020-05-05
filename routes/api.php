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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// routes from Ausencia module
Route::group(['as'=>'ausencia.','prefix' =>'ausencia'],function(){
    Route::get('',['as' =>'index','uses'=>'AusenciaController@index']);
    Route::post('',['as' =>'store','uses'=>'AusenciaController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'AusenciaController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'AusenciaController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'AusenciaController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'AusenciaController@restore']); // to restore ausencia, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'AusenciaController@forceDelete']); // to remove ausencia definitely, if use softDelete
});// routes from Dependentesativa module
Route::group(['as'=>'dependentesativa.','prefix' =>'dependentesativa'],function(){
    Route::get('',['as' =>'index','uses'=>'DependentesativaController@index']);
    Route::post('',['as' =>'store','uses'=>'DependentesativaController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'DependentesativaController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'DependentesativaController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'DependentesativaController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'DependentesativaController@restore']); // to restore dependentesativa, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'DependentesativaController@forceDelete']); // to remove dependentesativa definitely, if use softDelete
});// routes from Dependentesinativo module
Route::group(['as'=>'dependentesinativo.','prefix' =>'dependentesinativo'],function(){
    Route::get('',['as' =>'index','uses'=>'DependentesinativoController@index']);
    Route::post('',['as' =>'store','uses'=>'DependentesinativoController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'DependentesinativoController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'DependentesinativoController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'DependentesinativoController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'DependentesinativoController@restore']); // to restore dependentesinativo, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'DependentesinativoController@forceDelete']); // to remove dependentesinativo definitely, if use softDelete
});// routes from Efetivopmpr module
Route::group(['as'=>'efetivopmpr.','prefix' =>'efetivopmpr'],function(){
    Route::get('',['as' =>'index','uses'=>'EfetivopmprController@index']);
    Route::post('',['as' =>'store','uses'=>'EfetivopmprController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'EfetivopmprController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'EfetivopmprController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'EfetivopmprController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'EfetivopmprController@restore']); // to restore efetivopmpr, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'EfetivopmprController@forceDelete']); // to remove efetivopmpr definitely, if use softDelete
});// routes from Efetivopracas module
Route::group(['as'=>'efetivopracas.','prefix' =>'efetivopracas'],function(){
    Route::get('',['as' =>'index','uses'=>'EfetivopracasController@index']);
    Route::post('',['as' =>'store','uses'=>'EfetivopracasController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'EfetivopracasController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'EfetivopracasController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'EfetivopracasController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'EfetivopracasController@restore']); // to restore efetivopracas, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'EfetivopracasController@forceDelete']); // to remove efetivopracas definitely, if use softDelete
});// routes from Funcoesprivativas module
Route::group(['as'=>'funcoesprivativas.','prefix' =>'funcoesprivativas'],function(){
    Route::get('',['as' =>'index','uses'=>'FuncoesprivativasController@index']);
    Route::post('',['as' =>'store','uses'=>'FuncoesprivativasController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'FuncoesprivativasController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'FuncoesprivativasController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'FuncoesprivativasController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'FuncoesprivativasController@restore']); // to restore funcoesprivativas, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'FuncoesprivativasController@forceDelete']); // to remove funcoesprivativas definitely, if use softDelete
});// routes from Funcpriv module
Route::group(['as'=>'funcpriv.','prefix' =>'funcpriv'],function(){
    Route::get('',['as' =>'index','uses'=>'FuncprivController@index']);
    Route::post('',['as' =>'store','uses'=>'FuncprivController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'FuncprivController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'FuncprivController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'FuncprivController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'FuncprivController@restore']); // to restore funcpriv, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'FuncprivController@forceDelete']); // to remove funcpriv definitely, if use softDelete
});// routes from Inativos module
Route::group(['as'=>'inativos.','prefix' =>'inativos'],function(){
    Route::get('',['as' =>'index','uses'=>'InativosController@index']);
    Route::post('',['as' =>'store','uses'=>'InativosController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'InativosController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'InativosController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'InativosController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'InativosController@restore']); // to restore inativos, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'InativosController@forceDelete']); // to remove inativos definitely, if use softDelete
});// routes from Opmimpmeta4 module
Route::group(['as'=>'opmimpmeta4.','prefix' =>'opmimpmeta4'],function(){
    Route::get('',['as' =>'index','uses'=>'Opmimpmeta4Controller@index']);
    Route::post('',['as' =>'store','uses'=>'Opmimpmeta4Controller@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'Opmimpmeta4Controller@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'Opmimpmeta4Controller@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'Opmimpmeta4Controller@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'Opmimpmeta4Controller@restore']); // to restore opmimpmeta4, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'Opmimpmeta4Controller@forceDelete']); // to remove opmimpmeta4 definitely, if use softDelete
});// routes from Policial module
Route::group(['as'=>'policial.','prefix' =>'policial'],function(){
    Route::get('',['as' =>'index','uses'=>'PolicialController@index']);
    Route::post('',['as' =>'store','uses'=>'PolicialController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'PolicialController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'PolicialController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'PolicialController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'PolicialController@restore']); // to restore policial, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'PolicialController@forceDelete']); // to remove policial definitely, if use softDelete
});// routes from Policialhistorico module
Route::group(['as'=>'policialhistorico.','prefix' =>'policialhistorico'],function(){
    Route::get('',['as' =>'index','uses'=>'PolicialhistoricoController@index']);
    Route::post('',['as' =>'store','uses'=>'PolicialhistoricoController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'PolicialhistoricoController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'PolicialhistoricoController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'PolicialhistoricoController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'PolicialhistoricoController@restore']); // to restore policialhistorico, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'PolicialhistoricoController@forceDelete']); // to remove policialhistorico definitely, if use softDelete
});// routes from Reserva module
Route::group(['as'=>'reserva.','prefix' =>'reserva'],function(){
    Route::get('',['as' =>'index','uses'=>'ReservaController@index']);
    Route::post('',['as' =>'store','uses'=>'ReservaController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'ReservaController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'ReservaController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'ReservaController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'ReservaController@restore']); // to restore reserva, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'ReservaController@forceDelete']); // to remove reserva definitely, if use softDelete
});// routes from Opmpmpr module
Route::group(['as'=>'opmpmpr.','prefix' =>'opmpmpr'],function(){
    Route::get('',['as' =>'index','uses'=>'OpmpmprController@index']);
    Route::post('',['as' =>'store','uses'=>'OpmpmprController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'OpmpmprController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'OpmpmprController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'OpmpmprController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'OpmpmprController@restore']); // to restore opmpmpr, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'OpmpmprController@forceDelete']); // to remove opmpmpr definitely, if use softDelete
});// routes from Pmcm module
Route::group(['as'=>'pmcm.','prefix' =>'pmcm'],function(){
    Route::get('',['as' =>'index','uses'=>'PmcmController@index']);
    Route::post('',['as' =>'store','uses'=>'PmcmController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'PmcmController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'PmcmController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'PmcmController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'PmcmController@restore']); // to restore pmcm, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'PmcmController@forceDelete']); // to remove pmcm definitely, if use softDelete
});// routes from Posto module
Route::group(['as'=>'posto.','prefix' =>'posto'],function(){
    Route::get('',['as' =>'index','uses'=>'PostoController@index']);
    Route::post('',['as' =>'store','uses'=>'PostoController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'PostoController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'PostoController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'PostoController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'PostoController@restore']); // to restore posto, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'PostoController@forceDelete']); // to remove posto definitely, if use softDelete
});// routes from Absence module
Route::group(['as'=>'absence.','prefix' =>'absence'],function(){
    Route::get('',['as' =>'index','uses'=>'AbsenceController@index']);
    Route::post('',['as' =>'store','uses'=>'AbsenceController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'AbsenceController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'AbsenceController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'AbsenceController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'AbsenceController@restore']); // to restore absence, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'AbsenceController@forceDelete']); // to remove absence definitely, if use softDelete
});// routes from Activedependents module
Route::group(['as'=>'activedependents.','prefix' =>'activedependents'],function(){
    Route::get('',['as' =>'index','uses'=>'ActivedependentsController@index']);
    Route::post('',['as' =>'store','uses'=>'ActivedependentsController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'ActivedependentsController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'ActivedependentsController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'ActivedependentsController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'ActivedependentsController@restore']); // to restore activedependents, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'ActivedependentsController@forceDelete']); // to remove activedependents definitely, if use softDelete
});// routes from Inactivedependents module
Route::group(['as'=>'inactivedependents.','prefix' =>'inactivedependents'],function(){
    Route::get('',['as' =>'index','uses'=>'InactivedependentsController@index']);
    Route::post('',['as' =>'store','uses'=>'InactivedependentsController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'InactivedependentsController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'InactivedependentsController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'InactivedependentsController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'InactivedependentsController@restore']); // to restore inactivedependents, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'InactivedependentsController@forceDelete']); // to remove inactivedependents definitely, if use softDelete
});// routes from Effective module
Route::group(['as'=>'effective.','prefix' =>'effective'],function(){
    Route::get('',['as' =>'index','uses'=>'EffectiveController@index']);
    Route::post('',['as' =>'store','uses'=>'EffectiveController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'EffectiveController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'EffectiveController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'EffectiveController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'EffectiveController@restore']); // to restore effective, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'EffectiveController@forceDelete']); // to remove effective definitely, if use softDelete
});// routes from Effectivegraduates module
Route::group(['as'=>'effectivegraduates.','prefix' =>'effectivegraduates'],function(){
    Route::get('',['as' =>'index','uses'=>'EffectivegraduatesController@index']);
    Route::post('',['as' =>'store','uses'=>'EffectivegraduatesController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'EffectivegraduatesController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'EffectivegraduatesController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'EffectivegraduatesController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'EffectivegraduatesController@restore']); // to restore effectivegraduates, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'EffectivegraduatesController@forceDelete']); // to remove effectivegraduates definitely, if use softDelete
});// routes from Privatefunctions module
Route::group(['as'=>'privatefunctions.','prefix' =>'privatefunctions'],function(){
    Route::get('',['as' =>'index','uses'=>'PrivatefunctionsController@index']);
    Route::post('',['as' =>'store','uses'=>'PrivatefunctionsController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'PrivatefunctionsController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'PrivatefunctionsController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'PrivatefunctionsController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'PrivatefunctionsController@restore']); // to restore privatefunctions, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'PrivatefunctionsController@forceDelete']); // to remove privatefunctions definitely, if use softDelete
});// routes from Privatefunctionsperiods module
Route::group(['as'=>'privatefunctionsperiods.','prefix' =>'privatefunctionsperiods'],function(){
    Route::get('',['as' =>'index','uses'=>'PrivatefunctionsperiodsController@index']);
    Route::post('',['as' =>'store','uses'=>'PrivatefunctionsperiodsController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'PrivatefunctionsperiodsController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'PrivatefunctionsperiodsController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'PrivatefunctionsperiodsController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'PrivatefunctionsperiodsController@restore']); // to restore privatefunctionsperiods, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'PrivatefunctionsperiodsController@forceDelete']); // to remove privatefunctionsperiods definitely, if use softDelete
});// routes from Inactive module
Route::group(['as'=>'inactive.','prefix' =>'inactive'],function(){
    Route::get('',['as' =>'index','uses'=>'InactiveController@index']);
    Route::post('',['as' =>'store','uses'=>'InactiveController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'InactiveController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'InactiveController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'InactiveController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'InactiveController@restore']); // to restore inactive, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'InactiveController@forceDelete']); // to remove inactive definitely, if use softDelete
});// routes from Opmmeta4 module
Route::group(['as'=>'opmmeta4.','prefix' =>'opmmeta4'],function(){
    Route::get('',['as' =>'index','uses'=>'Opmmeta4Controller@index']);
    Route::post('',['as' =>'store','uses'=>'Opmmeta4Controller@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'Opmmeta4Controller@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'Opmmeta4Controller@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'Opmmeta4Controller@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'Opmmeta4Controller@restore']); // to restore opmmeta4, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'Opmmeta4Controller@forceDelete']); // to remove opmmeta4 definitely, if use softDelete
});// routes from Cops module
Route::group(['as'=>'cops.','prefix' =>'cops'],function(){
    Route::get('',['as' =>'index','uses'=>'CopsController@index']);
    Route::post('',['as' =>'store','uses'=>'CopsController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'CopsController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'CopsController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'CopsController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'CopsController@restore']); // to restore cops, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'CopsController@forceDelete']); // to remove cops definitely, if use softDelete
});// routes from Historicalpolice module
Route::group(['as'=>'historicalpolice.','prefix' =>'historicalpolice'],function(){
    Route::get('',['as' =>'index','uses'=>'HistoricalpoliceController@index']);
    Route::post('',['as' =>'store','uses'=>'HistoricalpoliceController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'HistoricalpoliceController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'HistoricalpoliceController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'HistoricalpoliceController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'HistoricalpoliceController@restore']); // to restore historicalpolice, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'HistoricalpoliceController@forceDelete']); // to remove historicalpolice definitely, if use softDelete
});// routes from Reservations module
Route::group(['as'=>'reservations.','prefix' =>'reservations'],function(){
    Route::get('',['as' =>'index','uses'=>'ReservationsController@index']);
    Route::post('',['as' =>'store','uses'=>'ReservationsController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'ReservationsController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'ReservationsController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'ReservationsController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'ReservationsController@restore']); // to restore reservations, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'ReservationsController@forceDelete']); // to remove reservations definitely, if use softDelete
});// routes from Opm module
Route::group(['as'=>'opm.','prefix' =>'opm'],function(){
    Route::get('',['as' =>'index','uses'=>'OpmController@index']);
    Route::post('',['as' =>'store','uses'=>'OpmController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'OpmController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'OpmController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'OpmController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'OpmController@restore']); // to restore opm, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'OpmController@forceDelete']); // to remove opm definitely, if use softDelete
});// routes from Fullcops module
Route::group(['as'=>'fullcops.','prefix' =>'fullcops'],function(){
    Route::get('',['as' =>'index','uses'=>'FullcopsController@index']);
    Route::post('',['as' =>'store','uses'=>'FullcopsController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'FullcopsController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'FullcopsController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'FullcopsController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'FullcopsController@restore']); // to restore fullcops, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'FullcopsController@forceDelete']); // to remove fullcops definitely, if use softDelete
});// routes from Positions module
Route::group(['as'=>'positions.','prefix' =>'positions'],function(){
    Route::get('',['as' =>'index','uses'=>'PositionsController@index']);
    Route::post('',['as' =>'store','uses'=>'PositionsController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'PositionsController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'PositionsController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'PositionsController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'PositionsController@restore']); // to restore positions, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'PositionsController@forceDelete']); // to remove positions definitely, if use softDelete
});