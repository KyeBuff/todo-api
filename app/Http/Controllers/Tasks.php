<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests\TaskRequest;

class Tasks extends Controller
{
    public function create(TaskRequest $request)
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

		public function update(TaskRequest $request, Task $task)
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
			//Set complete prop of task to true
	    $task->complete = true;

	    //Use model to save task in table
	    $task->save();
	    // return the article along with a 201 status code
	    return $task;

		}
}
