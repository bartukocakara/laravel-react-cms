<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("rating_id");
            $table->integer("status_id");
            $table->string("training_types");
            $table->string('favourite_players')->comment("1,3,2,8,9,12");
            $table->string('favourite_teams')->comment("1,3,2,8,9,12");
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
        Schema::dropIfExists('trainers');
    }
}
