<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchRatingTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $titleCodes = [ "COURT", "RESPECT", "COMPETITION", "AIR_CONDITION", "ENJOY" ];
        $starRating = [1, 10];
        Schema::create('match_rating_types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("title_code")->comment( json_encode($titleCodes) );
            $table->integer("stars")->comment( json_encode($starRating) );
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
        Schema::dropIfExists('match_rating_types');
    }
}
