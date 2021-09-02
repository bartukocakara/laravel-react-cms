<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager_contracts', function (Blueprint $table) {
            $table->id();
            $table->string("manager_id");
            $table->string("title");
            $table->text("content");
            $table->enum("type", ["TEAM", "PLAYER"]);
            $table->enum("status", ["PENDING", "SUCCESS", "FAILED", "CANCELED"]);
            $table->date("from_date");
            $table->date("to_date");
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
        Schema::dropIfExists('manager_contracts');
    }
}
