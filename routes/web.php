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

Route::get('/hehe', function () {
    return view('Index.index');
});
Route::get('/haha','WelcomeController@index');

Route::resource('Index', 'RestController');

Route::get('member/info', 'MemberController@info');
    
Route::get('member/info', ['uses' => 'MemberController@info']);

//起别名
Route::get('member/info', [
    'uses' => 'MemberController@info',
    'as' => 'memberinfo'
]);

Route::post('basic2', function (){
   return 'post method';
});

Route::get('basic1', function (){
    return 'get method';
});

// 多请求路由
Route::match(['get','post'],'multy1',function(){
    return 'hello world multy1';
});

Route::any('multy2',function(){
    return 'hello world multy2';
})->middleware('age');

Route::get('home', function (){
    return 'I am home';
});

Route::get('/hello', function (){
    return 'hello, welcome to laravelAcademy.org';
});

Route::redirect('/hello5', '/hello', 301);

Route::view('/welcome123', 'welcome');

/*Route::get('user/{id}', function ($id){
    return 'User : ' . $id;
});*/
/*Route::get('user123', function (){
    return 'user 123 url';
});*/
/*Route::get('user/test', function(){
    return 'user test url';
})->name('home');*/

Route::get('about', function (){
    return view('about');
});

//Route::get('company',  'CompanyController@get');
Route::get('component', 'ComponentController@index');
    
Route::get('componentget', 'ComponentController@get');
Route::get('componentfind', 'ComponentController@find');

//Route::get('login', 'API\UserController@login')->name('login');
//Route::get('register', 'API\UserController@register')->name('register');


Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});
Route::get('home', 'HomeController@home');
Route::get('index', 'HomeController@index');
Route::post('form', 'HomeController@form')->name('form.submit');
Route::get('form', function () {
    return view('form');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/passport', function () {
    return view('passport');
});
#Route::get('/wechat', 'WeChatController@serve');

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    //$user = \Auth::guard('api')->user();
    $user = \Auth::user()->email;
    //return response()->json($user);
    return $user;
});*/

//Route::post('login', 'Auth\LoginController@login')->middleware('auth:api');
Route::get('/user', function (Request $request) {
    //$user = \Auth::guard('api')->user();
    $user = \Auth::user()->email;
    //return response()->json($user);
    return $user;
});
