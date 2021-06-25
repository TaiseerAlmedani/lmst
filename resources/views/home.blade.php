<x-layouts.app>
    <section class="hero  is-fullheight">
        <div class="hero-head">
            <x-navbar />
        </div>
        <div class="hero-body">
            <div class="container has-text-left">
                <div class="columns mt-6">
                    <div class="column is-4  mt-12" style="margin-left: 100px; padding-left:4%; padding-top:-0%; ">
                        <h1 class="title has-text-weight-bold is-size-1 mb-0">
                            <span style="font-size: 3.5rem">S</span>iraj
                        </h1>
                        <h4 class="subtitle is-size-4 has-text-weight-medium mb-4">
                            People Without Education Is Like<br> Building Without Foundation.
                        </h4>
                        <img src="{{ asset('/images/header_left_imag.png') }}"  style="
                        position: absolute;
                        top: -15%;
                        left: -3%;">
                        <div class="buttons">
                            <button class="button is-warning is-large has-text-weight-bold has-text-weight-light has-text-dark" style="position: absolute;
                            top: 100%;
                            left: 46%;">PICK A
                                COURSE</button>
                        </div>
                    </div>
                    <div class="column is-8" style="margin-top: -8%; margin-left: 9%">
                        <img src="{{ asset('/images/header.png') }}" width="690">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container ">
        <section class="section">
            <h1 class="title has-text-centered">Courses</h1>
            <div class="columns">
                @foreach ($courses as $course)
                    <div class="column is-4">
                        <div class="card is-shady">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="{{ $course->course_img }}" alt="butterfly image" class="modal-button"
                                        data-target="modal-image4">
                                </figure>
                            </div>
                            <div class="card-content  modal-button" data-target="modal-card2">
                                <div class="content">
                                    <h4>{{ $course->slug }}</h4>
                                    <p>{{ Str::limit($course->description , 50, '...')}}</p>
                                    <a href="{{ route('course.show', $course) }}">
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
