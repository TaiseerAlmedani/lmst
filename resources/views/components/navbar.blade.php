<div class="hero-head">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a href="../">
                    <img src="{{ asset('/images/logo_siraj.png') }}" width="120">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu  is-family-cairo">

                <div class="navbar-end">
                    <span class="navbar-item">
                        <a class="button is-warning  has-text-black is-outlined" href="{{ route('home') }}"
                            style="border: none">
                            <span class="icon">
                                <i class="mdi mdi-home" style="font-size: 1.5rem"></i>
                            </span>
                            <span style="font-size:1.2rem">Home</span>
                        </a>
                    </span>
                    <span class="navbar-item">
                        <a class="button  is-warning has-text-black is-outlined" href="{{ route('course.index') }}"
                            style="
                        border: none;
                        ">
                            <span class="icon">
                                <i class="mdi mdi-school" style="font-size: 1.5rem"></i>
                            </span>
                            <span style="font-size:1.2rem">Courses</span>
                        </a>
                    </span>
                    @if (Route::has('login'))
                        @auth

                            <span class="navbar-item">
                                <div class="dropdown is-hoverable">
                                    <div class="dropdown-trigger">
                                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
                                            <span>Hi {{ Auth::user()->name }} !</span>
                                            <span class="icon is-small">
                                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                                        <div class="dropdown-content">
                                            <a class="button  is-warning has-text-black is-outlined"
                                                href="{{ route('profile.show', Auth::user()->profile->id ) }}" style="
                                border: none;
                                ">
                                                <span class="icon">
                                                    <i class="mdi mdi-school" style="font-size: 1.0rem"></i>
                                                </span>
                                                <span style="font-size:1.0rem">My Profile</span>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <button type="submit" class="button is-info is-outlined button">
                                                    {{ __('Log out') }}
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </span>



                                @else
                                    <span class="navbar-item divclass">
                                        <a class="button is-warning has-text-black is-outlined"
                                            href="{{ route('login') }}" style="
                                border: none;
                                ">
                                            <span class="icon">
                                                <i class="mdi mdi-login" style="font-size: 1.5rem"></i>
                                            </span>
                                            <span style="font-size:1.2rem">Login</span>
                                        </a>
                                    </span>
                                    @if (Route::has('register'))
                                        <span class="navbar-item">
                                            <a class="button is-warning  has-text-black is-outlined"
                                                href="{{ route('register') }}" style="
                                border: none;
                                ">
                                                <span class="icon">
                                                    <i class="mdi mdi-book" style="font-size: 1.5rem"></i>
                                                </span>
                                                <span style="font-size:1.2rem">Register</span>
                                            </a>
                                        </span>
                                    @endif
                                </div>
                            @endauth
                    @endif
                </div>
            </div>

    </nav>
</div>
