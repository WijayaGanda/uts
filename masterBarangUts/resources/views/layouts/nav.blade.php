@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-dark" style="background-color: #1E0342">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Master Barang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Wijaya Ganda</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a href="{{ route('home') }}"
                            class="nav-link @if ($currentRouteName == 'home') active @endif">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('barangs.index') }}"
                            class="nav-link @if ($currentRouteName == 'barangs.index') active @endif">List Barang</a>
                    </li>
            </div>
        </div>
    </div>
</nav>
