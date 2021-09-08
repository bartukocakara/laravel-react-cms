<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamSettingsTable extends Migration
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
        Schema::create('team_settings', function (Blueprint $table) {
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
        Schema::dropIfExists('team_settings');
    }
}
