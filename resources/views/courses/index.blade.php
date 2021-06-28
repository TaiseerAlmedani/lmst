<style>
    .col-carousel {
        margin: 70px 0;
    }

    /* owl nav */
    .owl-prev span,
    .owl-next span {
        color: #FFF;
    }

    .owl-prev span:hover,
    .owl-next span:hover {
        color: #8199A3;
    }

    .owl-prev,
    .owl-next {
        position: absolute;
        top: 0;
        height: 100%;
    }

    .owl-prev {
        left: 7px;
    }

    .owl-next {
        right: 7px;
    }

    /* removing blue outline from buttons */
    button:focus,
    button:active {
        outline: none;
    }

</style>
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
                <div class="row align-items-center">
                    <div class="col-12 col-carousel">
                        <div class="owl-carousel carousel-main">

                            @foreach ($category->courses as $course)

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
                                                <h4>{{ Str::limit($course->slug, 20, '...') }}</h4>
                                                <p>{{ Str::limit($course->description, 50, '...') }}</p>
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
                                                <a href="{{ route('course.show', $course) }}">
                                                    <span class="button is-link modal-button is-fullwidth">View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layouts.app>


<script>
    $(document).ready(function() {

        $('.carousel-main').owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                600: {
                    items: 4
                },

            },
            navText: ['<span class="fa fa-angle-left fa-2x"></span>',
                '<span class="fa fa-angle-right fa-2x"></span>'
            ],
        })
    })
</script>
