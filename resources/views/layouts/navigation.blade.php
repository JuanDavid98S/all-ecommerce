<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom p-4 sticky-top">
    <div class="container-fluid pe-4 ps-2">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
        </a>

        <!-- Hamburger Menu (Responsive Toggle) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse ps-5" id="navbarContent">
            <div class="mx-auto">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}" href="{{ route('blog.index') }}">{{ __('Shop') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}" href="{{ route('blog.index') }}">{{ __('Pages') }}</a>
                    </li>
                </ul>
            </div>

            <!-- Settings Dropdown -->
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->check() ? Auth::user()->name : 'Guest' }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">{{ __('Log Out') }}</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Responsive Navigation Menu (Bootstrap Collapse) -->
<div class="collapse" id="responsiveNavbar">
    <div class="bg-white border-top py-3">
        <div class="container">
            <ul class="list-unstyled mb-0">
                <li>
                    <a class="d-block py-2 text-dark {{ request()->routeIs('dashboard') ? 'fw-bold' : '' }}" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li>
                    <a class="d-block py-2 text-dark {{ request()->routeIs('profile.edit') ? 'fw-bold' : '' }}" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="d-block py-2 text-dark btn btn-link p-0">{{ __('Log Out') }}</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
