<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $privacy = [
            "blocked_players" => [0, 1],
            "blocked_teams" => [0, 1],
            "is_messages_enabled" => [0, 1],
            "is_join_team_req_enabled" => [0, 1],
        ];
        $eventAvailability = [
                "date_range" => [
                    "from" => "23-12-2021",
                    "to" => "30-12-2021",
                ],
                "is_all_requests_enabled" => [0, 1]
        ];
        Schema::create('tournament_settings', function (Blueprint $table) {
            $table->id();
            $table->json('privacy')->comment(json_encode($privacy, true));
            $table->json('event_availability')->comment(json_encode($eventAvailability, true));
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
        Schema::dropIfExists('tournament_settings');
    }
}
