@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<div class="sidebar sidebar-style-2">

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ url('/') }}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                {{-- <li class="nav-item">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('/') }}/demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}/demo2/index.html">
                                    <span class="sub-item">Dashboard 2</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('user') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Akun Admin</p>

                    </a>
                </li> --}}


                <ul class="nav nav-primary">
                    {{-- <li class="nav-item {{ checkRouteActive('dashboard') }} {{ checkRouteActive('user') }} {{ checkRouteActive('kodeba') }}
                        {{ checkRouteActive('kl') }} {{ checkRouteActive('pagu') }}"
                        {{ checkRouteActive('kodeakun') }} {{ checkRouteActive('kodekab') }}>
                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Master Data</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="dashboard">
                            <ul class="nav nav-collapse">
                                <x-template.sidebar.menu-item url="dashboard"
                                    class="{{ checkRouteActive('dashboard') }}" label="Dashboard" />
                                <x-template.sidebar.menu-item url="user" class="{{ checkRouteActive('user') }}"
                                    label="User" />
                                <x-template.sidebar.menu-item url="kodeba" class="{{ checkRouteActive('kodeba') }}"
                                    label="Kodeba" />
                                <x-template.sidebar.menu-item url="user" class="{{ checkRouteActive('logout') }}"
                                    label="Logout" />
                                <x-template.sidebar.menu-item url="kl" class="{{ checkRouteActive('kl') }}"
                                    label="Kl" />
                                <x-template.sidebar.menu-item url="pagu" class="{{ checkRouteActive('pagu') }}"
                                    label="Pagu" />
                                <x-template.sidebar.menu-item url="kodeakun" class="{{ checkRouteActive('kodeakun') }}"
                                    label="Kodeakun" />
                                <x-template.sidebar.menu-item url="kodekab" class="{{ checkRouteActive('kodekab') }}"
                                    label="Kodekab" />
                            </ul>
                        </div>
                    </li> --}}
                    <li class="nav-item {{ checkRouteActive('beranda') }}">
                        <a href="{{ url('beranda') }}">
                            <i class="fas fa-home"></i>
                            <p>beranda</p>
                        </a>
                    </li>


                    {{-- <li class="nav-item">
                        <a href="{{ url('user') }} {{ checkRouteActive('user') }}">
                            <i class="fas fa-desktop"></i>
                            <p>Widgets</p>

                        </a>
                    </li> --}}

                    <li class="nav-item {{ checkRouteActive('kodeba') }}">
                        <a href="{{ url('kodeba') }}">
                            <i class="fas fa-list"></i>
                            <p>Kode Ba</p>
                        </a>
                    </li>
                    <li class="nav-item {{ checkRouteActive('kl') }}">
                        <a href="{{ url('kl') }}">
                            <i class="fas fa-folder-open"></i>
                            <p>Kode KL</p>
                        </a>
                    </li>
                    <li class="nav-item {{ checkRouteActive('pagu') }}">
                        <a href="{{ url('pagu') }}">
                            <i class="fas fa-folder-open"></i>
                            <p>Kode Pagu</p>
                        </a>
                    </li>
                    <li class="nav-item {{ checkRouteActive('kodekab') }}">
                        <a href="{{ url('kodekab') }}">
                            <i class="fas fa-list"></i>
                            <p>Kode Kab</p>
                        </a>
                    </li>
                    <li class="nav-item {{ checkRouteActive('kodeakun') }}">
                        <a href="{{ url('kodeakun') }}">
                            <i class="fas fa-book"></i>
                            <p>Kode Akun</p>
                        </a>
                    </li>
                    <li class="nav-item {{ checkRouteActive('user') }}">
                        <a href="{{ url('user') }}">
                            <i class="fas fa-user"></i>
                            <p>Tambah Akun Admin</p>
                        </a>
                    </li>
                    <li class="nav-item {{ checkRouteActive('logout') }}">
                        <a href="{{ url('login') }}">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>


                </ul>


        </div>

    </div>
</div>
</div>
