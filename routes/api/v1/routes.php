<?php
/**
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 16:47
 */

use Dingo\Api\Routing\Router;

/** @var Dingo\Api\Routing\Router $api*/
$api->version('v1', ['namespace' => 'App\Api\Controllers\V1'], function (Router $api) {
    $api->group(['namespace' => 'Insurance', 'prefix' =>'company'], function(Router $api){
        $api->get('get', 'CompanyController@get');
    });
    
    $api->group(['namespace' => 'Demo', 'prefix' => 'demo'], function(Router $api){
        $api->get('member/info',
            [   'uses' => 'MemberController@info',
                'as' => 'memberinfo'
            ]
        );
        $api->get('member/get', 'MemberController@get');
    });
    
    /*require __DIR__ . '/../common/user.php';
    require __DIR__ . '/../common/post.php';*/
});