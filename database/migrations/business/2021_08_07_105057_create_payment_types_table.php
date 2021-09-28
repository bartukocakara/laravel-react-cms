<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $paymentTypes = ["CREDIT_CARD", "DEBIT_CARD", "WALLET", "FREE"];
        Schema::create('payment_types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("code")->comment(json_encode($paymentTypes));
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
        Schema::dropIfExists('payment_types');
    }
}
