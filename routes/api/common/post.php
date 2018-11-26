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
    'limit' => 10,
    'expires' => 1,
], function ($api) {
    // POST
    // post list
    $api->get('posts', [
        'as' => 'posts.postsList',
        'uses' => 'PostController@postsList',
    ]);
    // post detail
    $api->get('posts/{id}', [
        'as' => 'posts.postsDetail',
        'uses' => 'PostController@postsDetail',
    ]);
});