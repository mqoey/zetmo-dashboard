<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                        <span class="pcoded-mtext">Tokens</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('tokens.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Sale token</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('tokens.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Token history</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('tarrifs') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-aperture rotate-refresh"></i>
                        </span>
                        <span class="pcoded-mtext">Tarrifs</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('clientneighbourhood.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Client Neighbourhood</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                        <span class="pcoded-mtext">Loading Shedding</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('loadsheddings.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Load Shedding Schedule</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('loadsheddings.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">New Load Shedding</span>
                            </a>
                        </li>
                    </ul>
                </li>

            <div class="pcoded-navigation-label">Management</div>
            <ul class="pcoded-item pcoded-left-item">

                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                        <span class="pcoded-mtext">Clients</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('clients.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Clients</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('clients.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Client</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                        <span class="pcoded-mtext">Municipalities</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('municipalities.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">New Municipality</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('municipalities.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Municipalities</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                        <span class="pcoded-mtext">Areas</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('areas.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">New Area</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('areas.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Areas</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Neighbourhoods</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('neighbourhoods.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">New Neighbourhood</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('neighbourhoods.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Neighbourhoods</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                        <span class="pcoded-mtext">Stages</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('stages.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">New Stage</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('stages.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Stages</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{ route('users') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-user"></i>
                        </span>
                        <span class="pcoded-mtext">Users</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
