import React from 'react'
import { Link, NavLink } from 'react-router-dom'
import { HiUsers } from "react-icons/hi";
import { FaBasketballBall, FaFileContract } from "react-icons/fa";
import { MdEventAvailable } from "react-icons/md";
import { BsFillInfoCircleFill } from "react-icons/bs";
import { GiBasketballBasket, GiTrophyCup } from "react-icons/gi";
import { RiTeamFill, RiDashboardFill } from "react-icons/ri";
import { AiFillGift } from "react-icons/ai";
import { FiSettings } from "react-icons/fi";

const Sidebar = () => {


    return (
            <aside className="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " >
                <div className="sidenav-header">
                    <i className="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                    <Link to="" className="navbar-brand m-0" target="_blank">
                        <h5 className="ms-1 font-weight-bold"><FaBasketballBall className="text-warning"/> Social Basket </h5>
                    </Link>
                </div>
                <hr className="horizontal dark mt-0" />
                <div className="collapse navbar-collapse  ps sidenav" id="sidenav-collapse-main">
                    <ul className="navbar-nav">
                        <li className="nav-item" id="nav">
                            <NavLink to="/dashboard" className="nav-link">
                                <span className="nav-link-text ms-1"><RiDashboardFill/> Dashboard</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <a data-bs-toggle="collapse" href="#configurations" className="nav-link"  role="button" aria-expanded="true">

                                <span className="nav-link-text ms-1"><FiSettings/> Configurations</span>
                            </a>
                            <div className="collapse" id="configurations" >
                                <ul className="nav ms-4 ps-3">
                                <li className="nav-item">
                                    <NavLink to="roles" className="nav-link">
                                    <span className="sidenav-mini-icon"> F </span>
                                    <span className="sidenav-normal"> Roles </span>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to="permissions" className="nav-link ">
                                    <span className="sidenav-mini-icon"> P </span>
                                    <span className="sidenav-normal"> Permissions </span>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to="user-role-config" className="nav-link ">
                                    <span className="sidenav-mini-icon"> P </span>
                                    <span className="sidenav-normal"> User-Role Configurations </span>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to="role-page-config" className="nav-link">
                                    <span className="sidenav-mini-icon"> A </span>
                                    <span className="sidenav-normal"> Role-Page Configurations </span>
                                    </NavLink>
                                </li>
                                </ul>
                            </div>
                        </li>
                        <li className="nav-item">
                            <a data-bs-toggle="collapse" href="#users" className="nav-link"  role="button" aria-expanded="true">
                                <span className="nav-link-text ms-1"><HiUsers/> Users </span>
                            </a>
                            <div className="collapse" id="users" >
                                <ul className="nav ms-4 ps-3">
                                    <li className="nav-item">
                                        <NavLink to="players" className="nav-link">
                                            <span className="sidenav-mini-icon"> P </span>
                                            <span className="sidenav-normal"> Players </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="trainers" className="nav-link">
                                            <span className="sidenav-mini-icon"> T </span>
                                            <span className="sidenav-normal"> Trainers </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="coachs" className="nav-link">
                                            <span className="sidenav-mini-icon"> C </span>
                                            <span className="sidenav-normal"> Coaches </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="managers" className="nav-link" >
                                            <span className="sidenav-mini-icon"> M </span>
                                            <span className="sidenav-normal"> Managers </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="court-hosts" className="nav-link" >
                                            <span className="sidenav-mini-icon"> C </span>
                                            <span className="sidenav-normal"> Court Hosts </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="referees" className="nav-link" >
                                            <span className="sidenav-mini-icon"> R </span>
                                            <span className="sidenav-normal"> Referees </span>
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="nav-item">
                            <a data-bs-toggle="collapse" href="#events" className="nav-link"  role="button" aria-expanded="true">

                                <span className="nav-link-text ms-1"><MdEventAvailable/> Events</span>
                            </a>
                            <div className="collapse" id="events" >
                                <ul className="nav ms-4 ps-3">
                                    <li className="nav-item">
                                        <NavLink to="matches" className="nav-link">
                                        <span className="sidenav-mini-icon"> F </span>
                                        <span className="sidenav-normal"> Matches </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="tournaments" className="nav-link">
                                        <span className="sidenav-mini-icon"> P </span>
                                        <span className="sidenav-normal"> Tournaments </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="all-star-events" className="nav-link">
                                        <span className="sidenav-mini-icon"> A </span>
                                        <span className="sidenav-normal"> All Star </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="trainings" className="nav-link" >
                                        <span className="sidenav-mini-icon"> S </span>
                                        <span className="sidenav-normal"> Training </span>
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="nav-item">
                            <NavLink to="courts" className="nav-link" >
                                <span className="nav-link-text ms-1"><GiBasketballBasket/> Courts</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="teams" className="nav-link" >
                                <span className="nav-link-text ms-1"><RiTeamFill/> Teams</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="teams" className="nav-link" >
                                <span className="nav-link-text ms-1"><RiTeamFill/> Teams</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="gifts" className="nav-link" >
                                <span className="nav-link-text ms-1"><AiFillGift/> Gifts</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="prizes" className="nav-link" >
                                <span className="nav-link-text ms-1"><GiTrophyCup/> Prizes</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <a data-bs-toggle="collapse" href="#contracts" className="nav-link"  role="button" aria-expanded="true">

                                <span className="nav-link-text ms-1"><FaFileContract/> Contracts</span>
                            </a>
                            <div className="collapse" id="contracts" >
                                <ul className="nav ms-4 ps-3">
                                <li className="nav-item">
                                    <NavLink to="manager-contracts" className="nav-link">
                                    <span className="sidenav-mini-icon"> F </span>
                                    <span className="sidenav-normal"> Manager Contracts </span>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to="player-contracts" className="nav-link ">
                                    <span className="sidenav-mini-icon"> P </span>
                                    <span className="sidenav-normal"> Player Contracts </span>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to="court-contracts" className="nav-link">
                                    <span className="sidenav-mini-icon"> A </span>
                                    <span className="sidenav-normal"> Court Contracts </span>
                                    </NavLink>
                                </li>
                                </ul>
                            </div>
                        </li>
                        <li className="nav-item">
                            <a data-bs-toggle="collapse" href="#company" className="nav-link"  role="button" aria-expanded="true">

                                <span className="nav-link-text ms-1"><BsFillInfoCircleFill/> Company Info</span>
                            </a>
                            <div className="collapse" id="company" >
                                <ul className="nav ms-4 ps-3">
                                <li className="nav-item">
                                    <NavLink to="faq" className="nav-link">
                                    <span className="sidenav-mini-icon"> F </span>
                                    <span className="sidenav-normal"> F.A.Q. </span>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to="privacy-policies" className="nav-link ">
                                    <span className="sidenav-mini-icon"> P </span>
                                    <span className="sidenav-normal"> Privacy Policies </span>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to="about-us" className="nav-link ">
                                    <span className="sidenav-mini-icon"> A </span>
                                    <span className="sidenav-normal"> About Us </span>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to="sponsors" className="nav-link " >
                                    <span className="sidenav-mini-icon"> S </span>
                                    <span className="sidenav-normal"> Sponsors </span>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to="service-conditions" className="nav-link " >
                                    <span className="sidenav-mini-icon"> S.S. </span>
                                    <span className="sidenav-normal"> Service Conditions </span>
                                    </NavLink>
                                </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    </div>
        </aside>

    )
}

export default Sidebar
