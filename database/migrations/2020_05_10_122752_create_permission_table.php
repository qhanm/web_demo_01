<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('create');
            $table->boolean('update');
            $table->boolean('delete');
            $table->boolean('read');
            $table->integer('role_id');
            $table->string('function_id', 50)->nullable(false);

            $table->foreign('role_id')->references('id')->on('sys_role');
            $table->foreign('function_id')->references('id')->on('sys_function');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission');
    }
}
