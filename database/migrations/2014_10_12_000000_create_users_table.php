<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->text('mobile_number')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password')->nullable();
            $table->integer('user_status')->nullable();
            $table->text('forgot_password_token')->nullable();
            $table->text('email_verified_token')->nullable();
            $table->text('profile_picture')->nullable();
            $table->text('address')->nullable();
            $table->timestamp('user_lastlogin')->nullable();
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
