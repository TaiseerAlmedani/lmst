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
                        <a class="button  is-warning has-text-black is-outlined"
                            href="{{ route('course.index') }}" style="
                        border: none;
                        ">
                            <span class="icon">
                                <i class="mdi mdi-school"style="font-size: 1.5rem"></i>
                            </span>
                            <span style="font-size:1.2rem">Courses</span>
                        </a>
                    </span>
                    <span class="navbar-item divclass">
                        <a class="button is-warning has-text-black is-outlined" href="{{ route('login') }}"
                            style="
                        border: none;
                        ">
                            <span class="icon">
                                <i class="mdi mdi-login"style="font-size: 1.5rem"></i>
                            </span>
                            <span style="font-size:1.2rem">Login</span>
                        </a>
                    </span>
                    <span class="navbar-item">
                        <a class="button is-warning  has-text-black is-outlined" href="{{ route('register') }}"
                            style="
                        border: none;
                        ">
                            <span class="icon">
                                <i class="mdi mdi-book"style="font-size: 1.5rem"></i>
                            </span>
                            <span style="font-size:1.2rem">Register</span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </nav>
</div>
