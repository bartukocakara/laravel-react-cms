import React from 'react';
import DataTable from './datatable/Datatable'

const Dashboard = () => {
    return (
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">New Players</p>
                                    <h5 class="font-weight-bolder mb-0">
                                    +53
                                    <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </h5>
                                </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">New Teams</p>
                                    <h5 class="font-weight-bolder mb-0">
                                    23
                                    <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="">
                                        <p class="text-sm mb-0 font-weight-bold">New Courts</p>
                                        <h5 class="font-weight-bolder mb-0">
                                        +12
                                        <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                        </h5>
                                    </div>
                                    </div>
                                    <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                <div class="">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">New Matches</p>
                                    <h5 class="font-weight-bolder mb-0">
                                    +25
                                    <span class="text-success text-sm font-weight-bolder">+5%</span>
                                    </h5>
                                </div>
                                </div>
                                <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    )
}

export default Dashboard
