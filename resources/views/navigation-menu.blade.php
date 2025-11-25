<nav x-data="{ open: false }" class="navbar bg-slate-900 navbar-expand-lg flex-wrap top-0 px-0 py-0" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-2 px-4">
        <nav aria-label="breadcrumb">
            <div class="d-flex align-items-center">
                <a href="{{ route('dashboard') }}" class="px-3 fw-bold fs-5 text-white me-4 text-decoration-none">
                    {{ config('app.name', 'Vision360') }}
                </a>
            </div>
        </nav>

        <!-- Main navigation links -->
        <!-- <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item px-3 py-3 border-radius-sm d-flex align-items-center">
                <a href="{{ route('dashboard') }}" class="nav-link text-white p-0">Dashboard</a>
            </li>
            <li class="nav-item px-3 py-3 border-radius-sm d-flex align-items-center">
                <a href="{{ url('/pages/tables') }}" class="nav-link text-white p-0">Tables</a>
            </li>
            <li class="nav-item px-3 py-3 border-radius-sm bg-slate-800 d-flex align-items-center">
                <a href="{{ url('/pages/wallet') }}" class="nav-link text-white p-0">Wallet</a>
            </li>
            <li class="nav-item px-3 py-3 border-radius-sm d-flex align-items-center">
                <a href="{{ url('/pages/rtl') }}" class="nav-link text-white p-0">RTL</a>
            </li>
        </ul> -->

        <!-- Right side icons & dropdowns -->
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <ul class="navbar-nav ms-md-auto justify-content-end">
                <!-- Sidenav toggler -->
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </li>

                <!-- Notifications Dropdown -->
                <!-- <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="{{ url('/assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1"><span class="font-weight-bold">New message</span> from Laur</h6>
                                        <p class="text-xs text-secondary mb-0"><i class="fa fa-clock me-1"></i> 13 minutes ago</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36"><path d="M43,10.7482083..."/></svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">Payment successfully completed</h6>
                                        <p class="text-xs text-secondary mb-0"><i class="fa fa-clock me-1"></i> 2 days</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <!-- Profile Dropdown -->
                <li class="nav-item d-flex align-items-center ps-2">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->name }}
                                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <div class="block px-4 py-2 text-xs text-gray-400">{{ __('Manage Account') }}</div>
                            <x-dropdown-link href="{{ route('profile.show') }}">{{ __('Profile') }}</x-dropdown-link>
                            <div class="border-t border-gray-200"></div>
                            <form method="POST" action="{{ route('logout') }}" x-data>@csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">{{ __('Log Out') }}</x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </li>
            </ul>
        </div>

        <!-- Bottom links -->
        <!-- <hr class="horizontal w-100 my-0 dark">
        <div class="container pb-3 pt-3">
            <div class="ms-md-auto p-0 d-flex align-items-center w-sm-20">
                <div class="input-group border-dark">
                    <span class="input-group-text border-dark bg-dark text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </span>
                    <input type="text" class="form-control border-dark bg-dark" placeholder="Search" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
            </div>
        </div> -->
    </div>
</nav>