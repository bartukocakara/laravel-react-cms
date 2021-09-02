import React from 'react';
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import Sidebar from './components/layouts/Sidebar';
import Topbar from './components/layouts/Topbar';
import "./app.scss";
import { Provider, useDispatch, useSelector } from 'react-redux';

import adminRoutes from './helpers/routes/AdminRoutes';
import store from './redux/store';

function App() {
    const routeComponents = adminRoutes.map(({path, component, exact}, key) => <Route exact={exact} path={path} component={component} key={key} />);

    console.log(adminRoutes);
    return (
        <>
        <BrowserRouter>
            <Sidebar/>
            <main className="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
                <Topbar/>
                <div class="container-fluid py-4">
                    <Switch>
                        {routeComponents}
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
