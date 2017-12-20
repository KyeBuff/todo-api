<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class Tasks extends Controller
{
    public function create(Request $request)
		{
				 // get post request data for title and article
	    $data = $request->only(["task", "priority"]);
	    // create article with data and store in DB
	    $task = Task::create($data);
	    // return the article along with a 201 status code
	    return response($task, 201);

		}

		public function list()
		{
	    // get all the articles
	    return Task::all();
		}

		public function update(Request $request, Task $task)
		{
				 // get post request data for title and article
	    $data = $request->only(["task", "priority"]);
	    // create article with data and store in DB
	    $task->fill($data)->save();
	    // return the article along with a 201 status code
	    return response($task, 201);

		}

		public function delete(Task $task)
		{
	    $task->delete();
	    // use a 204 code as there is no content in the response
	    return response(null, 204);
		}

		public function complete(Task $task)
		{
	    $task->complete = true;

	    $task->save();
	    // return the article along with a 201 status code
	    return response($task, 201);

		}
}
