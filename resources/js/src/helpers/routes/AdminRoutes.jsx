import AllStarEvents from "./../../pages/all-star-events/AllStarEvents";
import CourtHosts from "./../../pages/court-hosts/CourtHosts";
import Courts from "./../../pages/courts/Courts";
import Matches from "./../../pages/matches/Matches";
import Players from "./../../pages/players/Players";
import Teams from "./../../pages/teams/Teams";
import Tournaments from "./../../pages/tournaments/Tournaments";
import Trainers from "./../../pages/trainers/Trainers";
import Trainings from "./../../pages/trainings/Trainings";
import Dashboard from './../../pages/dashboard/Dashboard';

const adminRoutes = [

    { name  : "Dashboard", path : "/dashboard", exact : true, component : Dashboard},
    { name  : "TeamList", path : "/teams", exact : false, component : Teams},
    { name  : "Players", path : "/players", exact : false, component : Players},
    { name  : "MatchList", path : "/matches", exact : false, component : Matches},
    { name  : "CourtList", path : "/courts", exact : false, component : Courts},
    { name  : "CourtHostList", path : "/court-hosts", exact : false, component : CourtHosts},
    { name  : "TrainerList", path : "/trainers", exact : false, component : Trainers},
    { name  : "TrainingList", path : "/trainings", exact : false, component : Trainings},
    { name  : "TournamentList", path : "/tournaments", exact : false, component : Tournaments},
    { name  : "AllStarEventList", path : "/all-star-events", exact : false, component : AllStarEvents},
    
];

export default adminRoutes