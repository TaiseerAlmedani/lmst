<x-layouts.app>
    <x-navbar />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/admin.css">

    <style>
        .card+.card {
            margin-top: 20px;
        }
    </style>

    <section class="hero is-large">
        <div class="hero-body pt-1">
            <div class="columns">
                <div class="column is-4">
                    <aside class="menu is-hidden-mobile">
                        <br />
                        <p class="menu-label">
                        </p>
                        <ul class="menu-list">
                            @foreach ($course->sections as $section)
                                <li>
                                    <div class="card is-fullwidth">
                                        <header class="card-header">
                                            <p class="card-header-title">{{ $section->name }}</p>
                                            <a class="card-header-icon card-toggle">
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </header>
                               @foreach ($section->lessons as  $lesson)
                                        <div class="card-content is-hidden">
                                            <div class="content">
                                                <a href="#">
                                                    @if ($lesson->type == 'video')
                                                <i class="mdi mdi-play-circle"
                                                    style="margin-top: 3px; font-size: 20px; display: inline"></i>
                                            @elseif ($lesson->type == "pdf")
                                                <i class="mdi mdi-file" style="font-size: 20px; display: inline"></i>
                                            @else
                                            @endif
                                             {{ $lesson->name }} <br>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </li>
                                @endforeach
                        </ul>
                    </aside>
                </div>
                <div class="column is-2" hidden></div>
                    <div class="column is-6 has-background-light">
                        <div class="container3">
                            <div class="overlay">
                                <p class="button has-background-white" style="width: 100%" >video title</p>
                            </div>
                            <video id="video" width="770" height="882" onclick="play();">
                                <source src="{{ asset('/Video/essam.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                    </div>
            </div>
        </div>

    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
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
