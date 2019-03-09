<?php

use Illuminate\Http\Request;

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
//http://www.laravelproject.net/api/company
//Route::get('company',  'V1\Insurance\CompanyController@get');
    /** @var Dingo\Api\Routing\Router $api*/
    $api = app('Dingo\Api\Routing\Router');
    require_once __DIR__.'/api/v1/routes.php';
