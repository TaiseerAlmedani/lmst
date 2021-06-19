<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="../">
                <img src="http://bulma.io/images/bulma-type-white.png" alt="Logo">
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
                    <a class="button is-white is-outlined" href="{{ route('home') }}">
                        <span class="icon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span>Home</span>
                    </a>
                </span>
                <span class="navbar-item">
                    <a class="button is-white is-outlined" href="{{ route('course.index') }}">
                        <span class="icon">
                            <i class="fa fa-superpowers"></i>
                        </span>
                        <span>Courses</span>
                    </a>
                </span>
                <span class="navbar-item">
                    <a class="button is-white is-outlined" href="#">
                        <span class="icon">
                            <i class="fa fa-book"></i>
                        </span>
                        <span>Login</span>
                    </a>
                </span>
                <span class="navbar-item">
                    <a class="button is-white is-outlined" href="#">
                        <span class="icon">
                            <i class="fa fa-github"></i>
                        </span>
                        <span>Register</span>
                    </a>
                </span>
            </div>
        </div>
    </div>
</nav>