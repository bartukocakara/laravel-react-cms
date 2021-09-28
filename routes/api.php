<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//***************** BACK APIS ************************
    // -----route prefix urı (/back/)----
Route::post("/postTesting", function (Request $request){
    return response()->json($request->all(), 200);
});

Route::get("/getTesting", function (){
    return response()->json(
        [
            [
                "name" => "Bartu",
                "surname" => "Kocakara",
            ]
        ], 200);
});

                    // PLAYER
Route::get("/players", "PlayerController@getAll");
Route::match(["get", "post"], "/players/create", "PlayerController@create");
Route::match(["get", "post"], "/players/{id}/settings", "PlayerController@settings");


                    // TEAM
Route::get("/teams", "TeamController@getAll");
Route::match(["get", "post"], "/teams/create", "TeamController@create");
Route::match(["get", "post"], "/teams//{id}/settings", "TeamController@settings");


                    //COURT
Route::get("/courts", "CourtController@getAll");
Route::match(["get", "post"], "/courts/create", "CourtController@create");
Route::match(["get", "post"], "/courts/{id}/settings", "CourtController@settings");


                    //MATCH
Route::get("/matches", "MatchController@getAll");
Route::match(["get", "post"], "/matches/create", "MatchController@create");
Route::match(["get", "post"], "/matches/{id}/settings", "MatchController@settings");


                    //TRAINING
Route::get("/trainings", "TrainingController@getAll");
Route::match(["get", "post"], "/trainings/create", "TrainingController@create");
Route::match(["get", "post"], "/trainings/{id}/settings", "TrainingController@settings");


                    //TRAINER
Route::get("/trainers", "TrainerController@getAll");
Route::match(["get", "post"], "/trainers/create", "TrainerController@create");
Route::match(["get", "post"], "/trainers/{id}/settings", "TrainerController@settings");


                    //TOURNAMENT
Route::get("/tournaments", "TournamentController@getAll");
Route::match(["get", "post"], "/tournaments/create", "TournamentController@create");
Route::match(["get", "post"], "/tournaments/{id}/settings", "TournamentController@settings");


                    //COURT Admin
Route::get("/courtAdmin", "CourtAdminController@getAll");
Route::match(["get", "post"], "/courtAdmin/create", "CourtAdminController@create");
Route::match(["get", "post"], "/courtAdmin/{id}/settings", "CourtAdminController@settings");


                    //ALL STAR
Route::get("/allStars", "AllStarController@getAll");
Route::match(["get", "post"], "/allStars/create", "AllStarController@create");
Route::match(["get", "post"], "/allStars/{id}/settings", "AllStarController@settings");


                    //REFEREE
Route::get("/referees", "RefereeController@getAll");
Route::match(["get", "post"], "/referees/create", "RefereeController@create");
Route::match(["get", "post"], "/referees/{id}/settings", "RefereeController@settings");



// ***************** FRONT APIS ************************

                    // PLAYER
Route::namespace('Api')->group(function () {

    Route::get("/{id}/lasActivities", "PlayerController@getPlayerLastActivities");
    Route::get("/{id}/favouritePlayers", "PlayerController@getFavouritePlayers");
    Route::get("/{id}/favouriteTeams", "PlayerController@getFavouriteTeams");
    Route::get("/{id}/favouriteTrainers", "PlayerController@getFavouriteTrainers");
    Route::get("/{id}/favouriteCourts", "PlayerController@getFavouriteCourts");
    Route::get("/{id}/matches", "PlayerController@getPlayersMatches");
    Route::get("/{id}/trainings", "PlayerController@getPlayersTrainings");

});


                    //TEAM



                    //COURT



                    //MATCH



                    //TRAINING



                    //TRAINER


                    //TOURNAMENT



                    //COURT ADMIN



                    //ALL STAR

                    //REFEREE
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
