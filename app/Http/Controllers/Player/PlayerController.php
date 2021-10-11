<?php

namespace App\Http\Controllers\Player;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\Eloquent\PlayerRepository;
class PlayerController extends Controller
{
    private $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    public function index()
    {
        $players = $this->playerRepository->all();

        return view('players.index', [
            'players' => $players
        ]);
    }
}
