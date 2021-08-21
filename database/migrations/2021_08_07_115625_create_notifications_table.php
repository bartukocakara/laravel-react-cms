<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("title");
            $table->string("content");
            $table->boolean("type", ["CREATE_MATCH_REQ", "CREATE_TRAINING_REQ", "CREATE_TOURNAMENT_REQ",
                                    "JOIN_MATCH_REQ", "JOIN_TEAM_REQ", "JOIN_TOURNAMENT_REQ", "JOIN_TRAINING_REQ", "JOIN_ALL_STAR_REQ",
                                    "CANCEL_MATCH","CANCEL_TRAINING", "CANCEL_TOURNAMENT", "CANCEL_JOIN_TEAM",
                                    ]);
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
        Schema::dropIfExists('notifications');
    }
}
