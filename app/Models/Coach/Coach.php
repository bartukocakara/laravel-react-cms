<?php

namespace App\Models\Coach;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coach extends User
{
    use HasFactory;

    protected $table = "coaches";
}
