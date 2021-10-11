<?php

namespace App\Repository;

use App\Model\Player\Player;
use Illuminate\Support\Collection;

interface PlayerRepositoryInterface
{
   public function all(): Collection;
}
