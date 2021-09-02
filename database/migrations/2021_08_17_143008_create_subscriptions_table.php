<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer("currency_id");
            $table->string("code", 3);
            $table->string("title", 50);
            $table->text("description");
            $table->decimal('total', 15, 2);
            $table->decimal('sub_total', 15, 2);
            $table->enum("status", [0, 1]);
            $table->integer("amount");

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
        Schema::dropIfExists('subscriptions');
    }
}
