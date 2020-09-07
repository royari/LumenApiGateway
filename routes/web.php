<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/comments', 'CommentController@index');
$router->get('/comments/{comment}','CommentController@show');

$router->get('/tweets', 'TweetController@index');
$router->get('/tweets/{tweet}', 'TweetController@show');
//  uses Twitter API
$router->get('/alltweets', 'TweetController@alltweets');