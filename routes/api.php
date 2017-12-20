<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$router->post("tasks", "Tasks@create");
$router->get("tasks", "Tasks@list");
$router->put("tasks/{task}", "Tasks@update");
$router->delete("tasks/{task}", "Tasks@delete");
$router->patch("tasks/{task}/complete", "Tasks@complete");