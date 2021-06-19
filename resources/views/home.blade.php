<x-layouts.app>
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <x-navbar/>
        </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Seeram
                        Learning Mangment System
                    </h1>
                    <h1 class="subtitle is-size-4">
                        A People Without Education Is Like A Building Without A Foundation
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container ml-3 mr-3">
        <section class="section">
        <h1 class="title has-text-centered">Courses</h1>
        <div class="columns">
            @foreach ($courses as $course )
            <div class="column is-4">
                <div class="card is-shady">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="{{ $course->course_img }}" alt="butterfly image" class="modal-button" data-target="modal-image4">
                    </figure>
                  </div>
                  <div class="card-content  modal-button" data-target="modal-card2">
                    <div class="content">
                      <h4>{{ $course->slug }}</h4>
                      <p>{{ $course->description }}</p>
                    <a href="">
                      <span class="button is-link modal-button is-fullwidth">View</span>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

        </div>
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <a href="{{ route('course.index') }}">
                    <button class="button is-medium is-link is-outlined is-fullwidth">See All</button>

                </a>
            </div>
        </div>
    </section>
    </div>

</x-layouts.app>
