<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchRequestHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $statuses = ["PENDING", "READY", "FAILED", "CANCELED", "STARTED", "ENDED", "PAYMENT_COMPLETED", "REFUND_COMPLETED", "REFUND_REQUEST_CREATED", "REFUND_REQUEST_REJECTED", "REFUND_REQUEST_APPROVED"];
        Schema::create('match_request_histories', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("court_host_id");
            $table->string("requested_players");
            $table->string("requested_teams");
            $table->string("requested_referees")->nullable(true);
            $table->string("match_id");
            $table->decimal("amount", 10, 2);
            $table->enum("status", $statuses);
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
        Schema::dropIfExists('match_request_histories');
    }
}
