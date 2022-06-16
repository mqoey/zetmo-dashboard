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
