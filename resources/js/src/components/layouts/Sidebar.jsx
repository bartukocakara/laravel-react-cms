import React from 'react'
import { Link, NavLink } from 'react-router-dom'
import { HiUsers } from "react-icons/hi";
import { FaBasketballBall, FaFileContract } from "react-icons/fa";
import { MdEventAvailable, MdCardMembership } from "react-icons/md";
import { BsFillInfoCircleFill } from "react-icons/bs";
import { GiBasketballBasket } from "react-icons/gi";
import { MdGroup } from "react-icons/md";
import { RiTeamFill, RiDashboardFill } from "react-icons/ri";
import { AiFillGift } from "react-icons/ai";
import { FiSettings } from "react-icons/fi";
import { BiSupport } from "react-icons/bi";
import { AiFillNotification, AiOutlineUsergroupAdd, AiOutlineFileProtect, AiFillStar } from "react-icons/ai";

const Sidebar = () => {
    return (
            <aside className="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ps ps--active-y bg-white" >
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
                                        <NavLink to="coaches" className="nav-link">
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
                            <a data-bs-toggle="collapse" href="#team-types" className="nav-link"  role="button" aria-expanded="true">

                                <span className="nav-link-text ms-1"><MdGroup/> Team Types</span>
                            </a>
                            <div className="collapse" id="team-types" >
                                <ul className="nav ms-4 ps-3">
                                    <li className="nav-item">
                                        <NavLink to="player-membership-types" className="nav-link">
                                        <span className="sidenav-mini-icon"> F </span>
                                        <span className="sidenav-normal"> Player Teams </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="team-membership-types" className="nav-link">
                                        <span className="sidenav-mini-icon"> P </span>
                                        <span className="sidenav-normal"> Training Teams </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="coach-membership-types" className="nav-link">
                                        <span className="sidenav-mini-icon"> A </span>
                                        <span className="sidenav-normal"> Company Teams </span>
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="nav-item">
                            <a data-bs-toggle="collapse" href="#membership-types" className="nav-link"  role="button" aria-expanded="true">

                                <span className="nav-link-text ms-1"><MdCardMembership/> Membership Types</span>
                            </a>
                            <div className="collapse" id="membership-types" >
                                <ul className="nav ms-4 ps-3">
                                    <li className="nav-item">
                                        <NavLink to="player-membership-types" className="nav-link">
                                        <span className="sidenav-mini-icon"> F </span>
                                        <span className="sidenav-normal"> Player Membership Types </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="team-membership-types" className="nav-link">
                                        <span className="sidenav-mini-icon"> P </span>
                                        <span className="sidenav-normal"> Team Membership Types </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="coach-membership-types" className="nav-link">
                                        <span className="sidenav-mini-icon"> A </span>
                                        <span className="sidenav-normal"> Coach Membership Types </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="trainer-membership-types" className="nav-link">
                                        <span className="sidenav-mini-icon"> A </span>
                                        <span className="sidenav-normal"> Trainer Membership Types </span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="manager-membership-types" className="nav-link" >
                                        <span className="sidenav-mini-icon"> S </span>
                                        <span className="sidenav-normal"> Manager Membership Types </span>
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
                            <NavLink to="support" className="nav-link" >
                                <span className="nav-link-text ms-1"><BiSupport/> Support Tickets</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="notifications" className="nav-link" >
                                <span className="nav-link-text ms-1"><AiFillNotification/> Notifications</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="subscriptions" className="nav-link" >
                                <span className="nav-link-text ms-1"><AiOutlineUsergroupAdd/> Subscriptions</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <NavLink to="licences" className="nav-link" >
                                <span className="nav-link-text ms-1"><AiOutlineFileProtect/> Licences</span>
                            </NavLink>
                        </li>
                        <li className="nav-item">
                            <a data-bs-toggle="collapse" href="#givings" className="nav-link"  role="button" aria-expanded="true">
                                <span className="nav-link-text ms-1"><AiFillGift/> Giving</span>
                            </a>
                            <div className="collapse" id="givings" >
                                <ul className="nav ms-4 ps-3">
                                    <li className="nav-item">
                                        <NavLink to="prizes" className="nav-link" >
                                            <span className="nav-link-text ms-1"> Prizes</span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="gifts" className="nav-link" >
                                            <span className="nav-link-text ms-1"> Gifts</span>
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="nav-item">
                            <a data-bs-toggle="collapse" href="#rating-types" className="nav-link"  role="button" aria-expanded="true">
                                <span className="nav-link-text ms-1"><AiFillStar/> Rating Types</span>
                            </a>
                            <div className="collapse" id="rating-types" >
                                <ul className="nav ms-4 ps-3">
                                    <li className="nav-item">
                                        <NavLink to="player-rating-types" className="nav-link" >
                                            <span className="nav-link-text ms-1"> Player Rating Types</span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="team-rating-types" className="nav-link" >
                                            <span className="nav-link-text ms-1"> Team Rating Types</span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="court-rating-types" className="nav-link" >
                                            <span className="nav-link-text ms-1"> Court Rating Types</span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="trainer-rating-types" className="nav-link" >
                                            <span className="nav-link-text ms-1"> Trainer Rating Types</span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="training-rating-types" className="nav-link" >
                                            <span className="nav-link-text ms-1"> Training Rating Types</span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="coach-rating-types" className="nav-link" >
                                            <span className="nav-link-text ms-1"> Coach Rating Types</span>
                                        </NavLink>
                                    </li>
                                    <li className="nav-item">
                                        <NavLink to="manager-rating-types" className="nav-link" >
                                            <span className="nav-link-text ms-1"> Manager Rating Types</span>
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>
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
