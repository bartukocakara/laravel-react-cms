<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->enum("code", ["SUPER_ADMIN", "ADMIN", "PLAYER", "TRAINER", "TEAM_HOST", "COURT_HOST", "MANAGER", "COACH", "REFEREE"]);
            $table->string("name");
            $table->text("description");
            $table->string("permissions")->comment("eru, crud");
            $table->enum("status", [0, 1]);
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
        Schema::dropIfExists('roles');
    }
}
