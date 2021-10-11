<?php

namespace App\Models\CourtAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourtAdmin extends User
{
    use HasFactory;

    protected $table = "court_admins";
}
