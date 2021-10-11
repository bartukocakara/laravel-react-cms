<?php

namespace App\Models\Referee;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Referee extends User
{
    use HasFactory;

    protected $table = "referees";

}
