<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create a table with the following columns and requirements
        if(!Schema::hasTable('tasks')){
            Schema::create('tasks', function (Blueprint $table) {
                $table->increments('id');            
                $table->string('task', 255);
                $table->boolean('complete')->default(false);
                $table->integer('priority')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
