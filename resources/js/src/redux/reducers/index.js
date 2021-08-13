import { combineReducers } from "redux";
import allStarReducer from "./allStarReducer";
import loginReducer from "./auth/loginReducer";
import registerReducer from "./auth/registerReducer";
import courtReducer from "./courtReducer";
import matchReducer from "./matchReducer";
import playerReducer from "./playerReducer";
import teamReducer from "./teamReducer";
import tournamentReducer from "./tournamentReducer";
import trainerReducer from "./trainerReducer";
import trainingReducer from "./trainingReducer";

const allReducer = combineReducers({
    players: playerReducer,
    courts : courtReducer,
    teams : teamReducer,
    matches : matchReducer,
    trainings : trainingReducer,
    trainers : trainerReducer,
    allStars : allStarReducer,
    tournaments : tournamentReducer,
    login : loginReducer,
    register : registerReducer
})

export default allReducer;