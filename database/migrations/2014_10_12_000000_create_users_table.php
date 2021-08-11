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
            $table->string('name');
            $table->string('second_name')->nullable(true);
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('phone_code');
            $table->tinyInteger('country_code');
            $table->string('phone');
            $table->text('address');
            $table->boolean('role', ["PLAYER", "TRAINER", "COURT_HOST", "MANAGER", "COACH"]);
            $table->timestamp('email_verified_at')->nullable();
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
