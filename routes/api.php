<?php
$api = app('Dingo\Api\Routing\Router');

$api->version('v1',
    //['middleware'=>'api.auth']
    [], function ($api) {
    $api->get('my-config', '\App\Api\V1\Controllers\IndexController@config');
    $api->resource('resource/config', '\App\Api\V1\Controllers\ConfigController');
    $api->get('test', '\App\Api\V1\Controllers\IndexController@test');
});
