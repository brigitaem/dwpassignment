<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selectkurs', "ControllerServices@selectData");
Route::post("/kursadd", "ControllerServices@kursInsert");
Route::post("/kursupdate", "ControllerServices@kursUpdate");
Route::get('/kursdelete/{idel}', "ControllerServices@kursDelete");
Route::get('/fill/{id}/{bank}/{jual}/{beli}', "ControllerServices@kursFill");

Route::get('/selectkurserate', "ControllerServices@selectKursErate");
Route::post("/kurserateadd", "ControllerServices@kursErateInsert");
Route::post("/kurserateupdate", "ControllerServices@kursErateUpdate");
Route::get('/kurseratedelete/{idel}', "ControllerServices@kursErateDelete");

Route::get('/selectusdjual', "ControllerServices@selectUsdJual");
Route::post("/usdjualadd", "ControllerServices@usdJualInsert");
Route::post("/usdjualupdate", "ControllerServices@usdJualUpdate");
Route::get('/usdjualdelete/{idel}', "ControllerServices@usdJualDelete");
