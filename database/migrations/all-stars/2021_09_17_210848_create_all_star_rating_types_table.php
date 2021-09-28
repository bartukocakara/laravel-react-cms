<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllStarRatingTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $titleCodes = [ "BAD", "BORING", "MIDDLE", "GOOD", "ENJOY"];
        Schema::create('all_star_rating_types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("title_code")->comment(json_encode($titleCodes));
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
        Schema::dropIfExists('all_star_rating_types');
    }
}
