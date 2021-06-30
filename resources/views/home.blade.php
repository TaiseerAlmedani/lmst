<x-layouts.app>




    <script
      src="https://kit.fontawesome.com/2828f7885a.js"
      integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
      crossorigin="anonymous"
    ></script>



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

            <section class="hero is-small is-dark">
                <div class="hero-body">
                  <p class="title  has-text-centered">
                    Most popular Courses
                  </p>

                </div>
              </section>

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


                                            @foreach ($course->tags as $tag)
                                            <p>TAg : {{ $tag->name }}</p>
                                            @endforeach

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
                {{-- <div class="column is-half is-offset-one-quarter">
                    <a href="{{ route('course.index') }}">
                        <button class="button is-medium is-link is-outlined is-fullwidth">See All</button>

                    </a>
                </div> --}}
            </div>
        </section>

        <section class="section">
            <section class="hero is-small is-dark">
                <div class="hero-body">
                  <p class="title  has-text-centered">
                    Our Courses
                  </p>

                </div>
              </section>


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










        {{-- <!-- Begin Services Content -->
        <div class="section-color services" id="services">
          <div class="container">
            <div class="columns is-multiline">
              <div
                class="column is-12 about-me"
                data-aos="fade-in"
                data-aos-easing="linear"
              >
                <h1 class="title has-text-centered section-title">Services</h1>

                <h2 class="subtitle">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua
                </h2>
                <br />
              </div>
              <div class="columns is-12">
                <div
                  class="column is-4 has-text-centered"
                  data-aos="fade-in"
                  data-aos-easing="linear"
                >
                  <i class="fad fa-meteor fa-3x"></i>
                  <hr />
                  <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  </h2>
                </div>
                <div
                  class="column is-4 has-text-centered"
                  data-aos="fade-in"
                  data-aos-easing="linear"
                >
                  <i class="fas fa-paint-brush fa-3x"></i>
                  <hr />
                  <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  </h2>
                </div>
                <div
                  class="column is-4 has-text-centered"
                  data-aos="fade-in"
                  data-aos-easing="linear"
                >
                  <i class="fas fa-rocket fa-3x"></i>
                  <hr />
                  <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  </h2>
                </div>
              </div>
              <hr />
              <div class="columns is-12">
                <div
                  class="column is-4 has-text-centered"
                  data-aos="fade-in"
                  data-aos-easing="linear"
                >
                  <i class="fas fa-upload fa-3x"></i>
                  <hr />
                  <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  </h2>
                </div>
                <div
                  class="column is-4 has-text-centered"
                  data-aos="fade-in"
                  data-aos-easing="linear"
                >
                  <i class="fas fa-bus fa-3x"></i>
                  <hr />
                  <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  </h2>
                </div>
                <div
                  class="column is-4 has-text-centered"
                  data-aos="fade-in"
                  data-aos-easing="linear"
                >
                  <i class="fas fa-code fa-3x"></i>
                  <hr />
                  <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- End Services Content -->
        <section class="hero is-fullheight is-dark pt-6" style="margin:-2%">
            <!-- Begin Main Content -->
            <div class="main-content">
              <!-- Begin About Me Section -->
              <div class="section-light about-me" id="about-me">
                <div class="container">
                  <div class="column is-12 about-me">
                    <h1 class="is-family-ciro has-text-centered  has-text-warning" style="font-size: 70px">About Ue</h1><br>
                  </div>
                  <div class="columns is-multiline">
                    <div
                      class="column is-6 has-vertically-aligned-content"
                      data-aos="fade-right"
                    >
                      <p class="is-larger pt-6">
                        &emsp;&emsp;<strong
                          >Showcase is a modern, beautiful personal website template to
                          showcase who you are, as well as projects you've worked on in
                          the past.</strong
                        >
                      </p>
                      <br />
                      <p class="pt-6">
                        Showcase was built from the ground up with Bulma to be fast and
                        responsive out of the box with all source files well documented
                        for easy to customization. The Showcase template gives you a
                        personal space to share what you are all about as a creative
                        designer, developer, photographer, and more!
                      </p>
                      <br />
                      <div class="is-divider"></div>
                      <div class="columns about-links">
                        <div class="column">
                        </div>
                        <div class="column">
                        </div>
                        <div class="column">
                        </div>
                      </div>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                      <img
                      style=" height: 100%; width:100%;
                        position: absolute;
                          top: 22%;
                          left: 10%;
                      "
                        src="{{ asset('/images/about_us_image.jpg') }}"
                        alt="about us image"
                      />
                    </div>
                  </div>
                </div>
              </div>
        </section>
          <!-- End About Me Content -->
           <!-- Scripts -->

    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: "ease-out",
        duration: 800,
      });
    </script>

</x-layouts.app>
