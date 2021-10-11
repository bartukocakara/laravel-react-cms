<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $moneyTransfer = [
            "enable_money_transfer" => [0, 1],

        ];
        //Başkalarının para talebi göndermesine izin ver
        //Bu seçeneği kapatarak diğer kullanıcıların sizden para talep etmesini engellemiş olursunuz. Para gönderme ve para talep etme fonksiyonları bu seçenekten etkilenmez.
        $banks = [
            [
                "bank_account_name" => "",
                "bank_name" => "",
                "currency_id" => "",
                "bank_accountholder_name" => "",
                "iban_number" => "TR...(26 chars)",
                "status" => [0, 1],
            ]
        ];
        Schema::create('wallet_settings', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
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
        Schema::dropIfExists('wallet_settings');
    }
}
