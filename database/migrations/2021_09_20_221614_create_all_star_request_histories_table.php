<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllStarRequestHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_star_request_histories', function (Blueprint $table) {
            $table->id();
            $table->integer("sender_id");
            $table->integer("receiver_id");
            $table->enum("type", ["JOIN_MATCH_TEAM", "JOIN_TALENT_GAME",
                                  "JOIN_SLAM_GAME", "JOIN_SHOOTING_GAME",]);
            $table->text("note");
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
        Schema::dropIfExists('all_star_request_histories');
    }
}
