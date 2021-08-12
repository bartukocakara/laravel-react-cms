<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//***************** BACK APIS ************************

Route::get("/players", "PlayerController@getAll");
Route::get("/teams", "TeamController@getAll");
Route::get("/courts", "CourtController@getAll");
Route::get("/matches", "MatchController@getAll");
Route::get("/trainings", "TrainingController@getAll");
Route::get("/trainers", "TrainerController@getAll");
Route::get("/tournaments", "TournamentController@getAll");



// ***************** FRONT APIS ************************

                    // PLAYER
Route::get("/{id}/lasActivities", "PlayerController@getPlayerLastActivities");
Route::get("/{id}/favouritePlayers", "PlayerController@getFavouritePlayers");
Route::get("/{id}/favouriteTeams", "PlayerController@getFavouriteTeams");
Route::get("/{id}/favouriteTrainers", "PlayerController@getFavouriteTrainers");
Route::get("/{id}/favouriteCourts", "PlayerController@getFavouriteCourts");
Route::get("/{id}/matches", "PlayerController@getPlayersMatches");
Route::get("/{id}/trainings", "PlayerController@getPlayersTrainings");



                    // TEAM



                    //COURT



                    //MATCH



                    //TRAINING



                    //TRAINER


                    //TOURNAMENT



                    //COURT HOST



                    //ALL STAR

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
