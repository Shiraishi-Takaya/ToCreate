<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('function_id');
            $table->string('name');
            $table->text('comment')->nullable();
            $table->boolean('type');
            $table->date('deadline')->nullable();
            $table->boolean('is_done');
            $table->timestamps();

            $table->foreign('function_id')
			    ->references('id')
				->on('functions')
				->onDelete('cascade');
        });
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
