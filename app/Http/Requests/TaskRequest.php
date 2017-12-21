<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            "task" => ["required", "string", "max:255"],
            "priority" => ["nullable", "integer", "between:1,3"],
        ];
    }
}
