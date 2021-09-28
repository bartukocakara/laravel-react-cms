<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrizeEarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $eventCategories = ["MATCH", "TOURNAMENT", "ALL_STAR"];
        Schema::create('prize_earnings', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("event_category")->comment(json_encode($eventCategories));
            $table->id();
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
        Schema::dropIfExists('prize_earnings');
    }
}
