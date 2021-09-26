<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateMatchSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $privacy = [
                "is_match_req_enabled" => [0, 1],
                "is_messages_enabled" => [0, 1],
                "is_join_req_enabled" => [0, 1],
                "is_training_req_enabled" => [0, 1],
        ];
        $eventAvailability = [
                "date_range" => [
                    "from" => "23-12-2021",
                    "to" => "30-12-2021",
                ],
                "week_days" => ["MONDAY", "THUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY", "SUNDAY"],
                "is_all_requests_enabled" => [0, 1]
        ];
        $couponCode = Str::random(6);
        $paymentStatus = [
            "13" => 0, // Keys are user_ids
            "21" => 1,
            "38" => 1,
            "55" => 1,
            "7" => 1,
            "90" => 0,
            "125" =>1,
        ]; // 0 = Didnt paid, 1 = Paid
        Schema::create('match_settings', function (Blueprint $table) {
            $table->id();
            $table->integer("created_user_id");
            $table->json('privacy')->comment(json_encode($privacy, true));
            $table->integer('payment_type_id');
            $table->integer("reward_id");
            $table->integer("max_player_limit");
            $table->integer("min_player_limit");
            $table->text("note")->nullable(true);
            $table->digit("fee", 8, 2);
            $table->string("coupon")->comment($couponCode);
            $table->string("players_payment_Status")->comment($paymentStatus);
            $table->enum("court_option", ["HALF", "FULL"]);
            $table->enum("payment_time", ["PRE_PAID", "CHECKIN_PAID", "HALF_PREPAID"])->default("CHECKIN_PAID");
            $table->datetime("event_datetime");
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
        Schema::dropIfExists('match_settings');
    }
}
