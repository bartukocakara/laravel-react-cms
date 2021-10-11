<?php

namespace App\Models\Manager;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manager extends User
{
    use HasFactory;

    protected $table = "managers";

}
