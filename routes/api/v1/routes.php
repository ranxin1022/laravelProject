<?php
/**
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 16:47
 */

use Dingo\Api\Routing\Router;

/** @var Dingo\Api\Routing\Router $api*/
$api->version('v1', ['namespace' => 'App\Api\Controllers\V1'/*, 'middleware'=>'api.common'*/], function (Router $api) {
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
        $api->get('mail', 'MailController@sendEmail');
    });
    
    $api->group(['namespace' => 'WeChat','prefix' => 'wechat'], function(Router $api){
        
        $api->any('/', 'WeChatController@serve');
        $api->get('menu/create', 'WeChatController@menu');
        $api->post('/message/custom/send', 'WeChatController@serve');
        $api->post('/media/upload', 'WeChatController@upload');
    });
    
    /*require __DIR__ . '/../common/user.php';
    require __DIR__ . '/../common/post.php';*/
    
    
});