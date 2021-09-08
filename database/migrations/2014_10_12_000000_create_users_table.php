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
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('district_id');
            $table->integer('membership_type_id');
            $table->integer('company_id');
            $table->integer('role_id');
            $table->string('active_currencies')->comment(["TRY|EUR|USD", "TRY|USD", "EUR|USD", "TRY|EUR"]);
            $table->string('name');
            $table->string('second_name')->nullable(true);
            $table->string('surname');
            $table->string('avatar');
            $table->string('slug');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('settings');
            $table->string('licences');
            $table->string("rewards");
            $table->tinyInteger('age');
            $table->tinyInteger('phone_code');
            $table->string('phone');
            $table->text('address');
            $table->integer('latitude');
            $table->integer('longitude');
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
