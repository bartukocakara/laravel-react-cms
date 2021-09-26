<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllStars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_stars', function (Blueprint $table) {
            $table->id();
            $table->integer("court_id");
            $table->integer("country_id");
            $table->integer("city_id");
            $table->integer("district_id");
            $table->string("players")->comment("player_ids : 123, 232, 54");
            $table->string("gifts")->comment("gift_ids : 2, 5, 4, 10");
            $table->string("prizes")->comment("prize_ids : 10, 12, 4, 1");
            $table->string("teams")->comment("team_ids : 103, 1223, 411, 156");
            $table->string("content");
            $table->string("referees")->comment("referee_ids : 232, 29, 411, 156");;
            $table->enum("status", ["PENDING", "STARTED", "ENDED", "CANCELED", "FAILED"]);
            $table->date("event_date");
            $table->string("url_slug");
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
        Schema::dropIfExists('all_stars');
    }
}
