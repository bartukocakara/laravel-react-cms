import AllStarEvents from "./../../pages/all-star-events/AllStarEvents";
import CourtHosts from "./../../pages/court-hosts/CourtHosts";
import Courts from "./../../pages/courts/Courts";
import Matches from "./../../pages/matches/Matches";
import Players from "../../pages/users/players/Players";
import Managers from "../../pages/users/managers/Managers";
import Teams from "./../../pages/teams/Teams";
import Tournaments from "./../../pages/tournaments/Tournaments";
import Trainers from "./../../pages/users/trainers/Trainers";
import Trainings from "./../../pages/trainings/Trainings";
import Dashboard from './../../pages/dashboard/Dashboard';
import Gifts from './../../pages/gifts/Gifts';
import Prizes from './../../pages/prizes/Prizes';
import AboutUs from "../../pages/info/about-us/AboutUs";
import SupportTickets from "../../pages/support-tickets/SupportTickets";
import AllStarLogs from "../../pages/logs/all-star-logs/AllStarLogs";
import MatchLogs from "../../pages/logs/match-logs/MatchLogs";
import PlayerLogs from "../../pages/logs/player-logs/PlayerLogs";
import TeamLogs from "../../pages/logs/team-logs/TeamLogs";
import TournamentLogs from "../../pages/logs/tournament-logs/TournamentLogs";
import Referees from "../../pages/users/referees/Referees";
import Sponsors from "../../pages/sponsors/Sponsors";
import PlayerRatingTypes from "../../pages/rating-types/PlayerRatingTypes";
import TeamRatingTypes from "../../pages/rating-types/TeamRatingTypes";
import MatchRatingTypes from "../../pages/rating-types/MatchRatingTypes";
import TrainerRatingTypes from "../../pages/rating-types/TrainerRatingTypes";
import TrainingRatingTypes from "../../pages/rating-types/TrainingRatingTypes";
import ManagerRatingTypes from "../../pages/rating-types/ManagerRatingTypes";
import CoachRatingTypes from "../../pages/rating-types/CoachRatingTypes";

const adminRoutes = [

    { name  : "Dashboard", path : "/dashboard", exact : true, component : Dashboard},
    { name  : "Team List", path : "/teams", exact : false, component : Teams},
    { name  : "Players List", path : "/players", exact : false, component : Players},
    { name  : "Match List", path : "/matches", exact : false, component : Matches},
    { name  : "Court List", path : "/courts", exact : false, component : Courts},
    { name  : "CourtHost List", path : "/court-hosts", exact : false, component : CourtHosts},
    { name  : "Trainer List", path : "/trainers", exact : false, component : Trainers},
    { name  : "Training List", path : "/trainings", exact : false, component : Trainings},
    { name  : "Tournament List", path : "/tournaments", exact : false, component : Tournaments},
    { name  : "AllStarEventList", path : "/all-star-events", exact : false, component : AllStarEvents},
    { name  : "Managers List", path : "/managers", exact : false, component : Managers},
    { name  : "Licences", path : "/licences", exact : false, component : AllStarEvents},
    { name  : "About", path : "/about", exact : false, component : AllStarEvents},
    { name  : "Match Logs", path : "/match-logs", exact : false, component : MatchLogs},
    { name  : "Player Logs", path : "/player-logs", exact : false, component : PlayerLogs},
    { name  : "Team Logs", path : "/team-logs", exact : false, component : TeamLogs},
    { name  : "All Star Logs", path : "/all-star-logs", exact : false, component : AllStarLogs},
    { name  : "Tournament Logs", path : "/tournament-logs", exact : false, component : TournamentLogs},
    { name  : "Prizes List", path : "/prizes", exact : false, component : Prizes},
    { name  : "Gifts List", path : "/gifts", exact : false, component : Gifts},
    { name  : "Referees", path : "/all-star-events", exact : false, component : Referees},
    { name  : "Sponsors", path : "/all-star-events", exact : false, component : Sponsors},
    { name  : "Support Tickets", path : "/support-tickets", exact : false, component : SupportTickets},
    { name  : "Player Rating Types", path : "/player-rating-types", exact : false, component : PlayerRatingTypes},
    { name  : "Team Rating Types", path : "/team-rating-types", exact : false, component : TeamRatingTypes},
    { name  : "Match Rating Types", path : "/match-rating-types", exact : false, component : MatchRatingTypes},
    { name  : "Trainer Rating Types", path : "/trainer-rating-types", exact : false, component : TrainerRatingTypes},
    { name  : "Training Rating Types", path : "/training-rating-types", exact : false, component : TrainingRatingTypes},
    { name  : "Manager Rating Types", path : "/manager-rating-types", exact : false, component : ManagerRatingTypes},
    { name  : "Coach Rating Types", path : "/coach-rating-types", exact : false, component : CoachRatingTypes},
    { name  : "About Us", path : "/about-us", exact : false, component : AboutUs},
    
];

export default adminRoutes