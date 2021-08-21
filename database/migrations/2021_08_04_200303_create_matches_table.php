<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string("players");
            $table->string("teams");
            $table->string("court");
            $table->boolean("match_category", ["STANDARD", "TOURNAMENT", "ALL_STAR"]);
            $table->boolean("status", ["PENDING", "READY", "FAILED", "STARTED", "ENDED"]);
            $table->boolean("allow_video", [0, 1]);
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
        Schema::dropIfExists('matches');
    }
}
