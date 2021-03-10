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
            $table->integer('id', true);
            $table->string('email', 255)->unique();
            $table->string('username', 255)->nullable();
            $table->string('password', 255);
            $table->string('remember_me', 255)->nullable();
            $table->string('s3_profile_pic', 255)->nullable();
            $table->enum('role', array('MEMBER','ADMIN','INFLUENCER'))->default('MEMBER');
            $table->string('activation_code', 255)->nullable();
            $table->timestamps();
            $table->string('reset', 50)->nullable();
            $table->string('referral', 255)->nullable();
            $table->timestamp('first_time_with_clips')->nullable();
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
