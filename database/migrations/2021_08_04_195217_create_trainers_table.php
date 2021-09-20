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
        $idList = ["1,3,2,8,9,12"];
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("status_id");
            $table->string("training_types")->comment("training_types : ". json_encode($idList));
            $table->string("licences")->comment("exm : ".json_encode($idList));
            $table->string('favourite_players')->comment("exm : ".json_encode($idList));
            $table->string('favourite_teams')->comment("exm : ".json_encode($idList));
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
