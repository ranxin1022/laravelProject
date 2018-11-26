<?php
/**
 * Created by IntelliJ IDEA.
 * User: chenjiazhi
 * Date: 2018/10/12
 * Time: PM7:02
 */

$api->group([
    'namespace' => 'Demo',
    'middleware' => 'api.throttle',
    'limit' => 5,
    'expires' => 1,
], function ($api) {
    // user list
    $api->get('users', [
        'as' => 'users.userList',
        'uses' => 'UserController@userList',
    ]);
    // user detail
    $api->get('users/{id}', [
        'as' => 'users.userDetail',
        'uses' => 'UserController@userDetail',
    ]);
    // create user
    $api->post('users', [
        'as' => 'users.createUser',
        'uses' => 'UserController@createUser',
    ]);
});