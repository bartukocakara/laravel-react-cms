import React from 'react';
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import Sidebar from './components/layouts/sidebar/Sidebar';
import Topbar from './components/layouts/Topbar';
import AllStarEvents from './pages/all-star-events/AllStarEvents';
import Courts from './pages/courts/Courts';
import Dashboard from './pages/dashboard/Dashboard';
import Matches from './pages/matches/Matches';
import Players from './pages/players/Players';
import Teams from './pages/teams/Teams';
import Tournaments from './pages/tournaments/Tournaments';
import Trainers from './pages/trainers/Trainers';
import Trainings from './pages/trainings/Trainings';
import "./app.scss";
import { Provider, useDispatch, useSelector } from 'react-redux';

import store from './redux/store';

function App() {
    return (
        <>
        <BrowserRouter>
            <Sidebar/>
            <main className=" mt-1 border-radius-lg">
                <Topbar/>
                <div class="container-fluid py-4">
                    <Switch>
                        <Route exact path="/dashboard" component={Dashboard} />
                        <Route path="/players" component={Players} />
                        <Route path="/teams" component={Teams} />
                        <Route path="/courts" component={Courts} />
                        <Route path="/matches" component={Matches} />
                        <Route path="/trainers" component={Trainers} />
                        <Route path="/trainings" component={Trainings} />
                        <Route path="/tournaments" component={Tournaments} />
                        <Route path="/all-star-events" component={AllStarEvents} />
                    </Switch>
                </div>
            </main>
        </BrowserRouter>

        </>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(
        <Provider store={store}>
            <App />
        </Provider>, document.getElementById('app'));
}
