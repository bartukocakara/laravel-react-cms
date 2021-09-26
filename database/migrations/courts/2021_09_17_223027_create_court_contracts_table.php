<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('court_contracts', function (Blueprint $table) {
            $table->id();
            $table->integer("court_id");
            $table->integer("contracter_user_id");
            $table->string("file_name");
            $table->decimal("fee", 15, 2);
            $table->string("from_date");
            $table->string("to_date");
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
        Schema::dropIfExists('court_contracts');
    }
}
