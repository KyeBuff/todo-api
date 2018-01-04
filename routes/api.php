<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

// Group method of router allows us to set a prefix
$router->group(["prefix" => "tasks"], function($router) {

	//{task} refers to the ID parameter in the URL
	//Tasks refers to the controller and it's @methods 
	$router->post("", "Tasks@create");
	$router->get("", "Tasks@list");
	$router->put("{task}", "Tasks@update");
	$router->delete("{task}", "Tasks@delete");
	$router->patch("{task}/complete", "Tasks@complete");

});

