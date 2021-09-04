<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->enum("category", [  "LIST" => ["PLAYER_LIST", "TEAM_LIST", "COURT_LIST", "COACH_LIST",
                                            "MANAGER_LIST", "TRAINER_LIST", "TRAINING_LIST", "TOURNAMENT_LIST", "ALLSTAR_LIST"],
                                        "DETAIL" => ["PLAYER_DETAIL", "TEAM_DETAIL", "COURT_DETAIL", "COACH_DETAIL",
                                            "MANAGER_DETAIL", "TRAINER_DETAIL", "TRAINING_DETAIL", "TOURNAMENT_DETAIL", "ALLSTAR_DETAIL"],
                                        "AUTH" => ["LOGIN", "REGISTER", "FORGOT_PASSWORD"],
                                        "EMAIL" => ["UI", "UX"],
                                        "RECOMMEND" => ["PLAYER_RECOMMEND", "TEAM_RECOMMEND", "COURT_RECOMMEND", "COACH_RECOMMEND",
                                            "MANAGER_RECOMMEND", "TRAINER_RECOMMEND", "TRAINING_RECOMMEND", "TOURNAMENT_RECOMMEND"],
                                    ]);
            $table->json("questions");
            $table->json("answers");
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
        Schema::dropIfExists('surveys');
    }
}
