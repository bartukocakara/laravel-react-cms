<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courts', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("contract_id");
            $table->integer("comment_id");
            $table->integer("country_id");
            $table->integer("city_id");
            $table->integer("district_id");
            $table->string("name");
            $table->text("address");
            $table->text("qualifications");
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
        Schema::dropIfExists('courts');
    }
}
