<x-layouts.app>
    <x-navbar />
    <style>
        .card+.card {
            margin-top: 20px;
        }

    </style>
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
    </div>

    <section class="section">
        <div class="container">
                <div class="columns">

                <div class="column is-5" style="margin-left: -5%">

                    <div class="card is-fullwidth has-background-dark has-text-warning is-size-1 has-text-centered">
                        <h3>course name here </h3>
                    </div>

                    <div class="card is-fullwidth">
                        <header class="card-header">
                            <p class="card-header-title">section #1</p>
                            <a class="card-header-icon card-toggle">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </header>
                        <div class="card-content is-hidden">
                            <div class="content">
                            <a href="">
                                icone here <br>
                                ايقونة حسب نوع الملف Content goes here <small>Small text</small>
                           </a>
                            </div>
                        </div>
                    </div>

                    <div class="card is-fullwidth">
                        <header class="card-header">
                            <p class="card-header-title">section #2</p>
                            <a class="card-header-icon card-toggle">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </header>
                        <div class="card-content is-hidden">
                            <div class="content">
                                Some more content. Look at all this whitespace. <small>(Unless you are on
                                    mobile)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-7 is-offset-1">



                     <video controls>
                         <source  src="{{ asset('/Video/essam.mp4') }}" type="video/mp4">
                     </video>



                  </div>

            </div>
        </div>

    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let cardToggles = document.getElementsByClassName('card-toggle');
            for (let i = 0; i < cardToggles.length; i++) {
                cardToggles[i].addEventListener('click', e => {
                    e.currentTarget.parentElement.parentElement.childNodes[3].classList.toggle('is-hidden');
                });
            }
        });
    </script>
</x-layouts.app>
