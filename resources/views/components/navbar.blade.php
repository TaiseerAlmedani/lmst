<div class="hero-head">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a  href="../">
                    <img src="{{asset('/images/logo_siraj.png')}}" width="120">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <span class="navbar-item">
                        <a class="button is-warning  has-text-black is-outlined" href="{{ route('home') }}">
                            <span class="icon">
                                <i class="mdi mdi-home"></i>
                            </span>
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="navbar-item">
                        <a class="button is-warning  has-text-black is-outlined" href="{{ route('course.index') }}">
                            <span class="icon">
                                <i class="mdi mdi-school"></i>
                            </span>
                            <span>Courses</span>
                        </a>
                    </span>
                    <span class="navbar-item">
                        <a class="button is-warning has-text-black is-outlined" href="#">
                            <span class="icon">
                                <i class="mdi mdi-book"></i>
                            </span>
                            <span>Login</span>
                        </a>
                    </span>
                    <span class="navbar-item">
                        <a class="button is-warning has-text-black is-outlined" href="#">
                            <span class="icon">
                                <i class="mdi mdi-github"></i>
                            </span>
                            <span>Register</span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </nav>
</div>
