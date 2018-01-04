<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Migration file: 2017_12_20_125106_create_tasks_table

class Task extends Model
{
    // Only allow the title and article field to get updated preventing mass assignment
    protected $fillable = ["task", "priority"];
}
