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
        $idList = [23, 57, 99, 120, 303];
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->integer("team_host");
            $table->integer("payment_type_id");
            $table->string("player_list")->comment("exm : ".json_encode($idList));
            $table->integer("country_id");
            $table->integer("city_id");
            $table->integer("district_id");
            $table->string("name");
            $table->string("url_slug");
            $table->string("rewards")->comment("reward_ids : ".json_encode($idList) );
            $table->json("player_request_statuses")->comment('["user_id" => "1", "status = 0"], ...');
            $table->enum("status", ["PENDING", "CREATED", "CANCELED", "FAILED"]);
            $table->enum("category", ["PLAYER_TEAM", "TRAINING_TEAM"]);
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
