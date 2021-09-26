<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $idList = [15, 56, 78, 90, 120, 220, 330, 500];
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->integer("host_id");
            $table->integer("country_id");
            $table->integer("city_id");
            $table->string("gifts")->comment("id list exm : ". json_encode($idList));
            $table->string("prizes")->comment("id list exm : ". json_encode($idList));
            $table->string("teams")->comment("id list exm : ". json_encode($idList));
            $table->string("players")->comment("id list exm : ". json_encode($idList));
            $table->string("courts")->comment("id list exm : ". json_encode($idList));
            $table->string("url_slug");
            $table->string("referees")->comment("id list exm : ". json_encode($idList));;
            $table->string("matches")->comment("id list exm : ". json_encode($idList));;
            $table->string("sponsors")->comment("id list exm : ". json_encode($idList));;
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
        Schema::dropIfExists('tournaments');
    }
}
