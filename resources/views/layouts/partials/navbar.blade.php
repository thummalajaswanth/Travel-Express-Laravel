<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
        <span class="navbar-text"><i class="fa fa-plane" aria-hidden="true"></i> Travel Express</span>
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar navbar-nav w-100">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span class="material-icons">
                        home
                    </span>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gallery">
                    <span class="material-icons">
                        collections
                    </span>
                    Gallery
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tour">
                    <span class="material-icons">
                        explore
                    </span>
                    Tours
                </a>
            </li>
            <li class="nav-item dropdown ml-auto">
                @guest
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
                        Account
                        <span class="material-icons">
                            expand_more
                        </span>
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
                        @if (Route::has('login'))
                            <a class="dropdown-item text-info" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
                        <div class="dropdown-divider"></div>
                        @if (Route::has('register'))
                            <a class="dropdown-item text-info" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="material-icons">
                                account_circle
                            </span> {{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->role_as == 'admin')
                                <a class="dropdown-item text-info" href="{{ url('/admin/profile') }}">Profile</a>
                            @else
                                <a class="dropdown-item text-info" href="{{ url('/user/profile') }}">Profile</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-info" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </li>
        </ul>
    </div>


</nav>
