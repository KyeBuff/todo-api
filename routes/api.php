<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

$router->group(["prefix" => "tasks"], function($router) {

	$router->post("", "Tasks@create");
	$router->get("", "Tasks@list");
	$router->put("{task}", "Tasks@update");
	$router->delete("{task}", "Tasks@delete");
	$router->patch("{task}/complete", "Tasks@complete");

});

