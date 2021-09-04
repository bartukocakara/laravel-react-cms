<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->integer("team_host");
            $table->string("player_list")->comment("players ids = 23|35|78|...");
            $table->integer("country_id");
            $table->integer("city_id");
            $table->integer("district_id");
            $table->string("name");
            $table->json("privacy_status");
            $table->string("rewards");
            $table->json("player_request_statuses")->comment('["user_id" => "1", "status = 0"], ...');
            $table->string("status", ["PENDING", "CREATED", "CANCELED", "FAILED"]);
            $table->json("settings");
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
        Schema::dropIfExists('teams');
    }
}
