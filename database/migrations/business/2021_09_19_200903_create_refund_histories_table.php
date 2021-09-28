<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_histories', function (Blueprint $table) {
            $table->id();
            $table->integer("refunder_user_id");
            $table->integer("refund_recipient_user_id");
            $table->enum("transaction_state_id", [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            $table->decimal("amount", 10, 2);
            $table->decimal("pay_cut", 10, 2);
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
        Schema::dropIfExists('refund_histories');
    }
}
