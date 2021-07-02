<x-layouts.app>
    <x-navbar />
<div class="div" style=" padding-top:2.5%; border-bottom: 1.6px dashed #FFDB4A; opacity:0.5; "></div>
    <div id="app">

        <nav class="nav has-shadow">
            <div class="container">


                <div class="nav-right nav-menu">
                    <a class="nav-item is-tab is-hidden-tablet">
                        <span class="icon"><i class="mdi mdi-home"></i></span> Home
                    </a>
                    <a class="nav-item is-tab is-hidden-tablet">
                        <span class="icon"><i class="mdi mdi-table"></i></span> Links
                    </a>
                    <a class="nav-item is-tab is-hidden-tablet">
                        <i class="mdi mdi-home" style="font-size: 1.5rem"></i>
                        </span> About
                    </a>

                    {{-- <a class="nav-item is-tab is-active">
                        <span class="icon"><i class="fa fa-user"></i></span>
                    </a>
                    <a class="nav-item is-tab">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                    </a> --}}
                </div>
            </div>
        </nav>

        <section class="main-content columns is-fullheight">

            <aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">
                <p class="menu-label is-hidden-touch" style="padding-left:10%; font-size:1.1rem">Welcome ! {{ $profile->name }}</p>
                <img src="{{ $profile->picture}}" alt="cc" style="
                    position: relative;
                    left:12%;
                    padding:4%;
                    margin:2%;
                    width: 150px;
                    height: 150px;
                border-radius: 100px;">
                <ul class="menu-list">
                    <li>
                        <a href="#" class="button is-warning  has-text-black is-outlined has-text-left"
                            style="border: none">
                            <span class="icon"><i class="mdi mdi-home"></i></span> Profile
                        </a>
                    </li>
                    <li>
                        <a href="#" class="button is-warning  has-text-black is-outlined has-text-left"
                            style="border: none">
                            <span class="icon"><i class="mdi mdi-table"></i></span> My Courses
                        </a>



                        <div class="buttons">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="button is-info is-outlined button">
                                    {{ __('Log out') }}
                                </button>
                            </form>
                        <div>
                        {{-- <a href="#" class="button is-warning  has-text-black is-outlined has-text-left"
                            style="border: none">
                            <span class="icon"><i class="mdi mdi-logout"></i></span> Log out
                        </a> --}}


            </aside>

            <div class="container column is-10">
                <div class="section">

                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Name</p>
                        </div>
                        <div class="card-content">
                            <div class="content">{{ $profile->name }}</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Email address</p>

                        </div>
                        <div class="card-content">
                            <div class="content">{{ $profile->email }}</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">birthday</p>
                        </div>
                        <div class="card-content">
                            <div class="content">{{ $profile->birthday }}</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Gender</p>
                        </div>
                        <div class="card-content">
                            <div class="content">{{ $profile->gender }}</div>
                        </div>
                    </div>

                    <br>

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">number</p>
                        </div>
                        <div class="card-content">
                            <div class="content">{{ $profile->phone }}</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">location</p>
                        </div>
                        <div class="card-content">
                            <div class="content">{{ $profile->country }}</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Education</p>
                        </div>
                        <div class="card-content">
                            <div class="content">{{ $profile->education }}</div>
                        </div>
                    </div>

                    <br>

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">upload new photo</p>
                        </div>
                        <div class="card-content">
                            <div class="content">Content</div>
                        </div>
                    </div>
                    <br />

                </div>
                <a href="{{ route('profile.edit' , $profile) }}"><button class="button is-link is-outlined">Edit Profile</button></a>
            </div>

        </section>

        <footer class="footer is-hidden">
            <div class="container ">
                <div class="content has-text-centered">
                    <p>Hello</p>
                </div>
            </div>
        </footer>

    </div>

</x-layouts.app>
