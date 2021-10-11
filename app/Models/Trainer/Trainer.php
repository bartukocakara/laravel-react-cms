<?php

namespace App\Models\Trainer;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainer extends User
{
    use HasFactory;

    protected $table = "trainers";

}
