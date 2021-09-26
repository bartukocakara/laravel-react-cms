<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string("question");
            $table->string("answer");
            $table->enum("category", ["CREATE_COURT", "CREATE_MATCH", "CREATE_TEAM", "CREATE_TRAINING","CREATE_TOURNAMENT",
                                     "MATCH_PAYMENT", "TRAINING_PAYMENT", "TOURNAMENT_PAYMENT", "ALLSTAR_PAYMENT",
                                     "GIFTS", "PRIZES", "SPONSORS", "REFERENCES", "SUPPORT", "CONTACT", "PRIVACY"]);
            $table->string("category_url_slug");
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
        Schema::dropIfExists('faqs');
    }
}
