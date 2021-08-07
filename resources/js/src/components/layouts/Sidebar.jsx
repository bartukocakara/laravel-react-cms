import React from 'react'
import { Link, NavLink } from 'react-router-dom'

const Sidebar = () => {
    return (
            <aside className="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ps ps--active-y" id="sidenav-main">
                <div className="sidenav-header">
                    <i className="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                    <Link to="" className="navbar-brand m-0" target="_blank">
                        <h5 className="ms-1 font-weight-bold">Baskethall</h5>
                    </Link>
                </div>
                <hr className="horizontal dark mt-0" />
                <div className="collapse navbar-collapse  ps" id="sidenav-collapse-main">
                    <ul className="navbar-nav">
                        <li className="nav-item">
                            <NavLink to="/dashboard" className="nav-link">
                                <span className="nav-link-text ms-1">Dashboard</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="players" className="nav-link  " >
                                <span className="nav-link-text ms-1">Players</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="courts" className="nav-link" >
                                <span className="nav-link-text ms-1">Courts</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="teams" className="nav-link" >
                                <span className="nav-link-text ms-1">Teams</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="matches" className="nav-link" >
                                <span className="nav-link-text ms-1">Matches</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="trainers" className="nav-link" >
                                <span className="nav-link-text ms-1">Trainers</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="trainings" className="nav-link" >
                                <span className="nav-link-text ms-1">Trainings</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="tournaments" className="nav-link" >
                                <span className="nav-link-text ms-1">Tournaments</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="all-star-events" className="nav-link" >
                                <span className="nav-link-text ms-1">All Star Events</span>
                            </NavLink>
                        </li>
                    </ul>
                    </div>
                <div className="ps__rail-x" style={{ left: "0px", bottom: "0px" }}>
                    <div className="ps__thumb-x" tabindex="0" style= {{left:" 0px", width: "0px"}}></div>
                </div>
                <div className="ps__rail-y" style={{top: "0px", height: "722px", right: "0px"}}>
                <div className="ps__thumb-y" tabindex="0" style={{top: "0px", height: "489px"}}>

                </div>
            </div>
        </aside>

    )
}

export default Sidebar
