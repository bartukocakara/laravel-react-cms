<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $images = [
            "image1.jpeg", "image2.jpeg", "image3.jpeg",
        ];
        Schema::create('court_ratings', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("court_id");
            $table->integer("court_property_id");
            $table->string("title");
            $table->string("message");
            $table->string("image")->comment(json_encode($images));
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
        Schema::dropIfExists('court_ratings');
    }
}
