<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/players", "PlayerController@getAll");
Route::get("/teams", "TeamController@getAll");
Route::get("/courts", "CourtController@getAll");
Route::get("/matches", "MatchController@getAll");
Route::get("/trainings", "TrainingController@getAll");
Route::get("/trainers", "TrainerController@getAll");
Route::get("/tournaments", "TournamentController@getAll");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
