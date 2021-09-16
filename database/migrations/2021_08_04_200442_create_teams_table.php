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
            $table->integer("payment_type_id");
            $table->integer("team_setting_id");
            $table->string("player_list")->comment("players ids = 23|35|78|...");
            $table->integer("country_id");
            $table->integer("city_id");
            $table->integer("district_id");
            $table->string("name");
            $table->string("url_slug");
            $table->string("rewards")->comment("reward_ids = [1,2,5,6,7,8]");
            $table->json("player_request_statuses")->comment('["user_id" => "1", "status = 0"], ...');
            $table->enum("status", ["PENDING", "CREATED", "CANCELED", "FAILED"]);
            $table->enum("category", ["PLAYER_TEAM", "TRAINING_TEAM", "COMPANY_TEAM"]);
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
