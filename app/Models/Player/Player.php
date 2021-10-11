<?php

namespace App\Models\Player;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends User
{
    use HasFactory;

    protected $table = "players";

}
