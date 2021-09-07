<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//***************** BACK APIS ************************
    // -----route prefix urı (/back/)----
Route::post("/postTesting", function (Request $request){
    return response()->json($request->all(), 200);
});

Route::post("/getTesting", function (){
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
Route::get("/players/create", "PlayerController@createPlayerPage");
Route::post("/players/create", "PlayerController@createPlayerPost");

                    // TEAM
Route::get("/teams", "TeamController@getAll");
Route::get("/teams/create", "TeamController@createTeamPage");
Route::post("/teams/create", "TeamController@createTeamPost");

                    //COURT
Route::get("/courts", "CourtController@getAll");
Route::get("/courts/create", "CourtController@createCourtPage");
Route::post("/courts/create", "CourtController@createCourtPost");

                    //MATCH
Route::get("/matches", "MatchController@getAll");
Route::get("/matches/create", "MatchController@createMatchPage");
Route::post("/matches/create", "MatchController@createMatchPost");

                    //TRAINING
Route::get("/trainings", "TrainingController@getAll");
Route::get("/trainings/create", "TrainingController@createTrainingPage");
Route::post("/trainings/create", "TrainingController@createTrainingPost");

                    //TRAINER
Route::get("/trainers", "TrainerController@getAll");
Route::get("/trainers/create", "TrainerController@createTrainerPage");
Route::post("/trainers/create", "TrainerController@createTrainerPost");


                    //TOURNAMENT
Route::get("/tournaments", "TournamentController@getAll");
Route::get("/tournaments/create", "TournamentController@createTournamentPost");
Route::post("/tournaments/create", "TournamentController@createTournamentPage");


                    //COURT HOST
Route::get("/courtHosts", "CourtHostController@getAll");
Route::get("/courtHosts/create", "CourtHostController@createCourtHostPage");
Route::post("/courtHosts/create", "CourtHostController@createCourtHostPost");


                    //ALL STAR
Route::get("/allStars", "AllStarController@getAll");
Route::get("/allStars/create", "AllStarController@createAllStarPage");
Route::post("/allStars/create", "AllStarController@createAllStarPost");


                    //REFEREE
Route::get("/referees", "RefereeController@getAll");
Route::get("/referees/create", "AllStarController@createRefereePage");
Route::post("/referees/create", "AllStarController@createRefereePost");



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
