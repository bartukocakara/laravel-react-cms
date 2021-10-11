<?php

namespace App\Repository\Eloquent;

use App\Model\Player;
use App\Repository\PlayerRepositoryInterface;
use Illuminate\Support\Collection;

class PlayerRepository extends BaseRepository implements PlayerRepositoryInterface
{

   /**
    * PlayerRepository constructor.
    *
    * @param Player $model
    */
   public function __construct(Player $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();    
   }
}
