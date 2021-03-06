<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licences', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->string("name");
            $table->string("description");
            $table->enum("category", ["SUPER_ADMIN", "ADMIN",
                                    "PLAYER", "TRAINER",
                                    "TEAM_HOST", "COURT_HOST",
                                    "MANAGER", "COACH", "REFEREE"])
                ->comment(["SUPER_ADMIN", "ADMIN", "PLAYER", "TRAINER",
                            "TEAM_HOST", "COURT_HOST", "MANAGER", "COACH", "REFEREE"]);
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
        Schema::dropIfExists('licences');
    }
}
