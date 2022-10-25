<x-admin>

    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3>Dashboard</h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">

                <div class="dropdown me-2 d-inline-block">
                    <a class="btn btn-light bg-white shadow-sm dropdown-toggle"
                       href="/" data-bs-toggle="dropdown"
                       data-bs-display="static">
                        <i class="align-middle mt-n1" data-feather="calendar"></i> Today
                    </a>

                    <div class="dropdown-menu dropdown-menu-end">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="/">Action</a>
                        <a class="dropdown-item" href="/">Another
                            action</a>
                        <a class="dropdown-item" href="/">Something else
                            here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/">Separated
                            link</a>
                    </div>
                </div>

                <button class="btn btn-primary shadow-sm">
                    <i class="align-middle" data-feather="filter">&nbsp;</i>
                </button>
                <button class="btn btn-primary shadow-sm">
                    <i class="align-middle" data-feather="refresh-cw">&nbsp;</i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                <div class="card illustration flex-fill">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="illustration-text p-3 m-1">
                                    <h4 class="illustration-text">Welcome Back, Humoyunmirzo!</h4>
                                    <p class="mb-0">Portfolio Dashboard</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="{{asset('admin/img/illustrations/customer-support.png')}}" alt="Customer Support"
                                     class="img-fluid illustration-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 24.300</h3>
                                <p class="mb-2">Total Earnings</p>
                                <div class="mb-0">
                                    <span class="badge badge-soft-success me-2"> +5.35% </span>
                                    <span class="text-muted">Since last week</span>
                                </div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-success" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">43</h3>
                                <p class="mb-2">Pending Orders</p>
                                <div class="mb-0">
                                    <span class="badge badge-soft-danger me-2"> -4.25% </span>
                                    <span class="text-muted">Since last week</span>
                                </div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-danger" data-feather="shopping-bag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 18.700</h3>
                                <p class="mb-2">Total Revenue</p>
                                <div class="mb-0">
                                    <span class="badge badge-soft-success me-2"> +8.65% </span>
                                    <span class="text-muted">Since last week</span>
                                </div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-info" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown position-relative">
                                <a href="/" data-bs-toggle="dropdown"
                                   data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="/">Action</a>
                                    <a class="dropdown-item" href="/">Another
                                        action</a>
                                    <a class="dropdown-item" href="/">Something
                                        else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Calendar</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 d-none d-xl-flex">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown position-relative">
                                <a href="/" data-bs-toggle="dropdown"
                                   data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="/">Action</a>
                                    <a class="dropdown-item" href="/">Another
                                        action</a>
                                    <a class="dropdown-item" href="/">Something
                                        else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Weekly sales</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="py-3">
                                <div class="chart chart-xs">
                                    <canvas id="chartjs-dashboard-pie"></canvas>
                                </div>
                            </div>

                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>Source</th>
                                    <th class="text-end">Revenue</th>
                                    <th class="text-end">Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><i class="fas fa-square-full text-primary"></i> Direct</td>
                                    <td class="text-end">$ 2602</td>
                                    <td class="text-end text-success">+43%</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-square-full text-warning"></i> Affiliate</td>
                                    <td class="text-end">$ 1253</td>
                                    <td class="text-end text-success">+13%</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-square-full text-danger"></i> E-mail</td>
                                    <td class="text-end">$ 541</td>
                                    <td class="text-end text-success">+24%</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-square-full text-dark"></i> Other</td>
                                    <td class="text-end">$ 1465</td>
                                    <td class="text-end text-success">+11%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown position-relative">
                                <a href="/" data-bs-toggle="dropdown"
                                   data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="/">Action</a>
                                    <a class="dropdown-item" href="/">Another
                                        action</a>
                                    <a class="dropdown-item" href="/">Something
                                        else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Appointments</h5>
                    </div>
                    <div class="card-body">
                        <ul class="timeline">
                            <li class="timeline-item">
                                <strong>Chat with Carl and Ashley</strong>
                                <span class="float-end text-muted text-sm">30m ago</span>
                                <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec,
                                    imperdiet iaculis, ipsum. Sed aliquam ultrices mauris...</p>
                            </li>
                            <li class="timeline-item">
                                <strong>The big launch</strong>
                                <span class="float-end text-muted text-sm">2h ago</span>
                                <p>Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer
                                    eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum
                                    rutrum
                                    nunc...</p>
                            </li>
                            <li class="timeline-item">
                                <strong>Coffee break</strong>
                                <span class="float-end text-muted text-sm">3h ago</span>
                                <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet,
                                    leo. Maecenas malesuada...</p>
                            </li>
                            <li class="timeline-item">
                                <strong>Chat with team</strong>
                                <span class="float-end text-muted text-sm">30m ago</span>
                                <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec,
                                    imperdiet iaculis, ipsum...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

</x-admin>
