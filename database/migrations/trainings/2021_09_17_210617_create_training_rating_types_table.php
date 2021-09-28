<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingRatingTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $titleCodes = [ "BAD", "BORING", "MIDDLE", "GOOD", "ENJOY"];
        Schema::create('training_rating_types', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description")->nullable(true);
            $table->string("title_code")->comment(json_encode($titleCodes));
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
        Schema::dropIfExists('training_rating_types');
    }
}
