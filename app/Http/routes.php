<?php

use App\Models\Control;

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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/php/info', function () use ($app) {
    phpinfo(); 
});

$app->get('/locations/countries', function () use ($app) {
    return [];
});

$app->get('/locations/states', function () use ($app) {
    return [];
});

$app->get('/locations/cities', function () use ($app) {
    return [];
});

$app->get('/results/lawyers', function () use ($app) {
    return [];
});

$app->get('/control/last', function () use ($app) {

    # Get last request from control table
	$last = Control::OrderBy("id", "DESC")->limit(1)->first();

	# Return last request
	return $last->request;

});
