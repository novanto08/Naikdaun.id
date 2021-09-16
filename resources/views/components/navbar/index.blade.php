{{-- nav bar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 my-0 d-block">
    <div class="container">
        <a class="navbar-brand d-block" href="{{ route('home') }}" >
            <img class="d-inline-block" src="{{ asset('/assets/img/logo/logo_h.svg') }}" width="150" height="40" alt="logo" />
        </a>

        <button
            class="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0 flex-md-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2 mt-md-2">
                    <a class="nav-link py-1 fw-medium {{ Request::is('about*') ? 'active' : '' }}" aria-current="page" href="{{ url('/about') }}">
                        About
                    </a>
                </li>
                <li class="nav-item px-2 mt-md-2">
                    <a class="nav-link py-1 fw-medium {{ Request::is('works*') ? 'active' : '' }}" href="{{ url('/works') }}">
                        Works
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- end nav bar --}}
