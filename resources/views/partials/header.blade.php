<header>
    <nav class="navbar navbar-expand-lg shadow-sm navbar-dark bg-primary fixed-top header-bg">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ route('index') }}">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fa fa-navicon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->route()->getName() === "index" ? 'active' : '' }}">
                        <a class="nav-link text-center" href="{{ route('index') }}">{{ __('main.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-block btn-outline-light" href="{{ route('login') }}">{{ __('auth.sign_in') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-language"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-center" href="{{ route('locale', 'lt') }}"><span class="flag-icon flag-icon-lt"></span></a>
                            <a class="dropdown-item text-center" href="{{ route('locale', 'en') }}"><span class="flag-icon flag-icon-gb"></span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>