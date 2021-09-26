<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminFeatureModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_feature_modules', function (Blueprint $table) {
            $table->id();
            $table->string("version")->comment("v.1.0.0, v.1.0.1,v.1.");
            $table->string("description")->comment("Only Court Reservation can be done by app");
            $table->string("modules")->comment("module_ids : 1,2,3,4,5,6,7,8,9,10");
            $table->string("sub_modules")->comment("sub_module_ids : 1,2,3,4,5,6,7,8,9,10");
            $table->string("pages")->comment("page_ids : 1,2,3,4,5,6,7,8,9,10");
            $table->string("user_types")->comment('["SUPER_ADMIN", "ADMIN", "PLAYER", "TRAINER", "TEAM_HOST", "COURT_HOST", "MANAGER", "COACH", "REFEREE"]');
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
        Schema::dropIfExists('admin_feature_modules');
    }
}
