<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $statistics = [
            "profile_views" => 100,
            "favorited_players" => 200,
            "matches_joined" => 250,
            "matches_accepted" => 250,
        ];

        $createMatchOptions = [
            [
                "from_date_time" => "04/05/2022 12-00-00",
                "to_date_time" => "04/05/2022 12-00-00",
                "call_teams" => [25, 35],
                "call_players" => [25, 35],
                "court_usage" => "FULL",
                "coupon" => "ABC123",
                "reserv_court_list" => [12, 23, 56],
                "prize" => 13, // prize_id
                "note" => "Lorem ipsum dolor sit amet.",
                "privacy" => [
                    "is_join_request_enabled" => 1,
                    "is_message_request_enabled" => 0,
                ]
            ],
            [
                "from_date_time" => "12/12/2022 14-00-00",
                "to_date_time" => "04/12/2022 12-00-00",
                "call_teams" => [94, 56],
                "call_players" => [20, 78],
                "court_usage" => "FULL",
                "coupon" => "ABC123",
                "reserv_court_list" => [56, 33, 15],
                "prize" => 18, // prize_id
                "note" => "Lorem ipsum dolor sit amet.",
                "match_settings" => [
                    "is_join_request_enabled" => 0,
                    "is_message_request_enabled" => 1,
                    "max_player_count" => 10,
                    "min_player_count" => 6
                ]
            ],

        ];
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("positions")->comment("PG|SG|SF|PF|C");
            $table->string('favourite_players')->comment("1,3,2,8,9,12");
            $table->string('favourite_courts')->comment("25,99,12,23");
            $table->string('favourite_teams')->comment("25,99,12,23");
            $table->string('favourite_trainers')->comment("25,120,12,23");
            $table->json("settings");
            $table->string("prize_earnings");
            $table->string("create_match_options")->comment($createMatchOptions);
            $table->string("statistics")->comment(json_encode($statistics));
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
        Schema::dropIfExists('players');
    }
}
