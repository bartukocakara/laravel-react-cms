<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtAdminSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $privacy = [
            "is_email_show_enabled" => [0, 1],
            "is_phone_show_enabled" => [0, 1],
            "is_name_show_enabled" => [0, 1],
            "is_avatar_show_enabled" => [0, 1],
        ];
        Schema::create('court_admin_settings', function (Blueprint $table) {
            $table->id();
            $table->text("privacy")->comment(json_encode($privacy));
            $table->enum("status", ["PASSIVE", "ACTIVE"])->comment('["PASSIVE", "ACTIVE"]');
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
        Schema::dropIfExists('court_admin_settings');
    }
}
