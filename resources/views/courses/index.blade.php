<x-layouts.app>
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <x-navbar />
        </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Seeram
                        <br>
                        Learning Mangment System
                    </h1>
                    <h1 class="subtitle is-size-4">
                        All Courses We Have It
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="continer m-6">
            @foreach ($categories as $category)
                <p class="is-size-3">{{ $category->slug }}</p>
                @foreach ($category->courses as $course)
                    <div class="owl-carousel">
                        <div>
                            <div class="card is-shady">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="{{ $course->course_img }}" alt="butterfly image"
                                            class="modal-button" data-target="modal-image4">
                                    </figure>
                                </div>
                                <div class="card-content  modal-button" data-target="modal-card2">
                                    <div class="content">
                                        <h4>{{ $course->slug }}</h4>
                                        <p>{{ $course->description }}</p>
                                        <a href="{{ route('course.show', $course) }}">
                                            <span class="button is-link modal-button is-fullwidth">View</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </section>
</x-layouts.app>


<script>
    $(document).ready(function() {

        $(".owl-carousel").owlCarousel({
            loop: true,
            // center: true,
            nav: false,
            responsive: {
                600: {
                    items: 4
                },

            },
            dots: false,
            margin: 10,
        })
    })

</script>
