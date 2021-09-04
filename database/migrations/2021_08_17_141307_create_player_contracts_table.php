<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_contracts', function (Blueprint $table) {
            $table->id();
            $table->string("player_id");
            $table->string("title");
            $table->text("content");
            $table->enum("status", ["PENDING", "COMPLETED", "FAILED", "CANCELED"]);
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
        Schema::dropIfExists('player_contracts');
    }
}
