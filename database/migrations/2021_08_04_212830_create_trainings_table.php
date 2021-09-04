<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->integer("training_type_id");
            $table->string("trainers")->comment("trainer_ids : 5,6,10,23,79");
            $table->string("players")->comment("player_ids : 90,23,122,500,2003");;
            $table->string("courts")->comment("court_ids : 5,6,10,23,79");;
            $table->string("date");
            $table->string("status", ["PENDING", "READY", "FAILED", "COMPLETED", "CANCELED"]);
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
        Schema::dropIfExists('trainings');
    }
}
