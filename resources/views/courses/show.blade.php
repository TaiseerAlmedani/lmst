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
    <section class="hero is-warning">
        <x-navbar />
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-6 has-text-left">
                        <h1 class="title is-2 box has-background-info-light">
                            {{ $course->slug }}
                        </h1>
                        <div class="columns is-gapless">
                            <div class="mx-2">
                                <span class="icon">
                                    <i class="mdi mdi-star"></i>
                                </span>
                            </div>
                            <div class="mx-2">
                                hours here
                            </div>
                            <div class="mx-2">
                                tag here
                            </div>
                            <div class="mx-2">
                                category here
                            </div>
                            <div class="mx-2">
                                price here
                            </div>
                        </div>
                        <h2 class="subtitle is-4 has-text-left">
                            {{ $course->description }}
                        </h2>
                        <br>
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
        <div class="columns">
            <div class="column is-6"></div>
            <div class="column is-6"></div>
        </div>
    </section>





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
