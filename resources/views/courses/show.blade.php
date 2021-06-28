<x-layouts.app>
    <x-slot name="styles">
        <style>
            html,
            body {
                font-family: 'Open Sans';
            }

            img {
                padding: 5px;
                border: 1px solid #ccc;
            }

        </style>
    </x-slot>
    <x-navbar />
    <section class="hero is-dark">



        <div class="hero-body ">
            <div class="container">
                <div class="columns">
                    <div class="column is-6 has-text-left">
                        <h1 class="title is-2 has-text-white">
                            {{ $course->slug }}
                        </h1>
                        <div class="columns is-gapless">
                            <div class="mx-2 pr-4" style="border-right: 2px solid yellow">
                                {{ $course->hours }} hours
                            </div>
                            <div class="mx-2 pr-4" style="border-right: 2px solid yellow">
                                tag here
                            </div>
                            <div class="mx-2 pr-4" style="border-right: 2px solid yellow">
                                {{ $course->category->name }}
                            </div>
                            <div class="mx-2 pr-6" style="border-right: 2px solid yellow">
                                <p>{{ $course->price }} $</p>
                            </div>
                            <div class="max-2">
                                <div class="star_icon pl-1 ">
                                    @if ($course->rate === 1)
                                        <i class="mdi mdi-star"></i>
                                    @elseif( $course->rate === 2 )
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                    @elseif( $course->rate === 3 )
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                    @elseif( $course->rate === 4 )
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                    @else
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <h2 class="subtitle is-4 has-text-left" style="margin-top: -2%; margin-bottom: 5%">
                            {{ $course->description }}
                        </h2>
                        <div class="buttons pb-6">
                            <div class="button is-warning has-text-dark is-large pr-6 pl-6">Enroll</div>
                        </div>
                    </div>
                    <div class="column is-5 is-offset-1">
                        <figure class="image is-4by3">
                            <img src="{{ $course->course_img }}" alt="Description">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="columns pt-6">
            {{-- ----------------- course details -------------- --}}
            <div class="column is-8">
                <section class="section">
                    <div class="container">
                        <div class="card is-fullwidth">
                            <header class="card-header">
                                <div class=" card-header-icon card-toggle" style="width: 100%">
                                    <p class="card-header-title">Introduction</p>
                                    <a class="card-header-icon card-toggle">
                                        <i class="mdi mdi-arrow-down"></i>
                                    </a>

                                </div>
                            </header>
                            <div class="card-content is-hidden">
                                <div class="content pl-6">
                                    <div class="content_file">

                                        <p>First Section</p>
                                        @foreach ($course->sections as $section)
                                            <p>{{ $section->name }}</p>


                                            @foreach ($section->lessons as $Key => $lesson)

                                                @if ($lesson->type == 'video')
                                                    <i class="mdi mdi-play-circle"
                                                        style="margin-top: 3px; font-size: 20px; display: inline"></i>
                                                @elseif ($lesson->type == "pdf")
                                                    <i class="mdi mdi-file"
                                                        style="font-size: 20px; display: inline"></i>
                                                @else
                                                @endif
                                                Lesson {{ ++$Key }} : {{ $lesson->name }} <br>
                                                <hr>
                                            @endforeach
                                            @if ($loop->first) @break
                                        @endif
                                        @endforeach
                                        {{-- <p>{{ $course->sections()->first()->name }}</p> --}}
                                        {{-- <p>{{ $section->lessons()-first()->name }}</p> --}}
                                        {{-- <i class="mdi mdi-file" style="font-size: 20px; display: inline"></i>
                                        <p style="display: inline">file</p> --}}

                                    </div>
                                    {{-- <div class="content_file pt-4">
                                        <i class="mdi mdi-play-circle"
                                            style="margin-top: 3px; font-size: 20px; display: inline"></i>
                                        <p style="display: inline">video</p>

                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card is-fullwidth">
                            <header class="card-header">
                                <div class=" card-header-icon card-toggle" style="width: 100%">
                                    <p class="card-header-title">Subject</p>
                                    <a class="card-header-icon card-toggle">
                                        <i class="mdi mdi-arrow-down"></i>
                                    </a>
                                </div>
                            </header>
                            <div class="card-content is-hidden">
                                <div class="content">
                                    <div class="content pl-6">
                                        <div class="content_file">
                                            <p>The rest of section</p>
                                            @foreach ($course->sections as $section)
                                                @if ($loop->first) @continue
                                                @endif
                                                {{ $section->name }}<br>

                                                @foreach ($section->lessons as $lesson)
                                                @if ($lesson->type == 'video')
                                                <i class="mdi mdi-play-circle"
                                                    style="margin-top: 3px; font-size: 20px; display: inline"></i>
                                            @elseif ($lesson->type == "pdf")
                                                <i class="mdi mdi-file"
                                                    style="font-size: 20px; display: inline"></i>
                                            @else
                                            @endif
                                                    Lesson : {{ $lesson->name }} <br>
                                                @endforeach
                                            @endforeach
                                            <i class="mdi mdi-file" style="font-size: 20px; display: inline"></i>
                                            <p style="display: inline">file</p>

                                        </div>
                                        <div class="content_file pt-4">
                                            <i class="mdi mdi-play-circle"
                                                style="margin-top: 3px; font-size: 20px; display: inline"></i>
                                            <p style="display: inline">video</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            {{-- ------------ tutor card ------------------------- --}}
            <div class="column is-4">

                <div class="tutor has-text-centered"
                    style="padding: 2em; border: 2px solid black; border-radius:10px; position: relative; width: 80%">
                    <img src="{{ $course->teacher_img }}" alt="hi"
                        style="width: 160px; height:160px; border-radius: 50%; position: absolute; top: 0%; left: 50%; border: none; transform: translate(-50%, -50%)">
                    <h2 style="padding-top: 30%; font-size: 30px; font-weight: bold">{{ $course->teacher_name }}</h2>
                    <p style="padding-top: 5%">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum a vitae
                        ipsa eos, nam id velit porro dicta iusto provident.</p>
                    <div class="social pt-6">
                        <i class="mdi mdi-facebook" style="font-size: 30px"></i>
                        <i class="mdi mdi-telegram" style="font-size: 30px"></i>
                        <i class="mdi mdi-twitter" style="font-size: 30px"></i>
                        <i class="mdi mdi-gmail" style="font-size: 30px"></i>
                    </div>
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




    {{-- <div class="column is-5 is-offset-1 has-text-centered">
               <h1 class="title is-2 box has-background-info-light">
                  {{ $course->slug }}
               </h1>
               <h2 class="subtitle is-4 has-text-left">
                  {{ $course->description }}
               </h2>
               <br>
               code here course details
               <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="media-content">
                      <p class="title is-4">John Smith</p>
                      <p class="subtitle is-6">@johnsmith</p>
                    </div>
                  </div>

                  <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                    <a href="#">#css</a> <a href="#">#responsive</a>
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                  </div>
                </div>
              </div>

               <figure class="image is-4by3">
                <img src="{{ $course->teacher_img }}" alt="Description">
            </figure>
           </div>
       </div>
   </div>
</div> --}}


</x-layouts.app>
