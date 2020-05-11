<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 100)->unique();
            $table->string('password');
            $table->string('email', 150)->unique();
            $table->string('full_name');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone', 20);
            $table->string('address', 200);
            $table->string('avatar', 200)->nullable(true);
            $table->string('security_stamp', 100);
            $table->integer('status')->default(15); // status user wait
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
