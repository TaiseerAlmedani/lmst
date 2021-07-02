<x-layouts.app>




    <script src="https://kit.fontawesome.com/2828f7885a.js"
        integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG" crossorigin="anonymous">
    </script>



    <section class="hero  is-fullheight">
        <div class="hero-head">
            <x-navbar />
        </div>
        <div class="hero-body">
            <div class="container has-text-left">
                <div class="columns mt-6">
                    <div class="column is-4  mt-12" style="margin-left: 100px; padding-left:4%; padding-top:-0%; ">
                        <h1 class="title has-text-weight-bold is-size-1 mb-0" style="color: black !important;">
                            <span style="font-size: 3.5rem">S</span>iraj
                        </h1>
                        <h4 class="subtitle is-size-4 has-text-weight-medium mb-4">
                            People Without Education Is Like<br> Building Without Foundation.
                        </h4>
                        <img src="{{ asset('/images/header_left_imag.png') }}" style="
                        position: absolute;
                        top: -15%;
                        left: -3%;">
                        <div class="buttons">
                            <button
                                class="button is-warning is-large has-text-weight-bold has-text-weight-light has-text-dark"
                                style="position: absolute;
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

            <section class="hero is-small mt-6 mb-6">
                <div class="hero-body">
                    <p class="title  has-text-left has-text-weight-bold">
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
                                    <p>{{ Str::limit($course->description, 30, '...') }}</p>


                                    {{-- @foreach ($course->tags as $tag)
                                        <p>TAg : {{ $tag->name }}</p>
                                    @endforeach --}}


                                        {{-- <p>{{ Str::limit($course->description, 50, '...') }}</p>
                                        @foreach ($course->tags as $tag)
                                            <p>TAg : {{ $tag->name }}</p>
                                        @endforeach --}}
                                        <a href="{{ route('course.show', $course) }}">
                                            <span
                                                class="button is-dark has-text-warning has-text-weight-bold modal-button is-fullwidth">View</span>
                                        </a>
                                        {{-- <a href="{{ route('course_details.show', $course) }}">
                                            <span class="button is-link modal-button is-fullwidth">View00</span>
                                        </a> --}}
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
            <section class="hero is-small ">
                <div class="hero-body">
                    <p class="title  has-text-left has-text-weight-bold">
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
                                    <p>{{ Str::limit($course->description, 50, '...') }}</p>
                                    <a href="{{ route('course.show', $course) }}">
                                        <span
                                            class="button is-dark has-text-warning has-text-weight-bold modal-button is-fullwidth">View</span>
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
                        <button class="button is-medium is-dark is-outlined is-fullwidth mb-6">See All</button>

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
    {{-- <section class="hero is-fullheight is-dark pt-6" style="margin:-2%">
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
        </section> --}}
    <!-- End About Me Content -->
    <!-- Scripts -->

    {{-- <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: "ease-out",
        duration: 800,
      });
    </script> --}}


    <!-- Designined by CodingLab | www.youtube.com/codinglabyt -->


    <meta charset="UTF-8">
    <title> Responsive Our Team Section | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* Google Font CDN Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .body44 {
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            background: #f2f2f2;
            position: relative;
        }

        .body44::before {
            content: '';
            position: absolute;
            width: 100%;
            background: #ffdb4a;
            clip-path: inset(47% 0 0 0);
            z-index: -1;
            height: 100%;
        }

        ::selection {
            background: #ffdb4a;
            color: #fff;
        }

        .container3 {
            max-width: 950px;
            width: 100%;
            overflow: hidden;
            padding: 80px 0;
        }

        .container3 .main-card {
            display: flex;
            justify-content: space-evenly;
            width: 200%;
            transition: 1s;
        }

        #two:checked~.main-card {
            margin-left: -100%;
        }

        .container3 .main-card .cards {
            width: calc(100% / 2 - 10px);
            display: flex;
            flex-wrap: wrap;
            margin: 0 20px;
            justify-content: space-between;
        }

        .main-card .cards .card {
            width: calc(100% / 3 - 10px);
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
            transition: all 0.4s ease;
        }

        .main-card .cards .card:hover {
            transform: translateY(-15px);
        }

        .cards .card .content {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .cards .card .content .img {
            height: 130px;
            width: 130px;
            border-radius: 50%;
            padding: 3px;
            background: #ffdb4a;
            margin-bottom: 14px;
        }

        .card .content .img img {
            height: 100%;
            width: 100%;
            border: 3px solid #ffff;
            border-radius: 50%;
            object-fit: cover;
        }

        .card .content .name {
            font-size: 20px;
            font-weight: 500;
        }

        .card .content .job {
            font-size: 15px;
            color: #000;
            margin-top: 3%;
        }

        .card .content .media-icons {
            margin-top: 10px;
            display: flex;

        }

        .media-icons a {
            text-align: center;
            line-height: 33px;
            height: 35px;
            width: 35px;
            margin: 0 4px;
            font-size: 14px;
            color: #FFF;
            border-radius: 50%;
            border: 2px solid transparent;
            background: #000000;
            transition: all 0.3s ease;
        }

        .media-icons a:hover {
            color: #ffdb4a;
            background-color: #fff;
            border-color: #ffdb4a;
        }

        .container3 .button {
            width: 100%;
            display: flex;
            justify-content: center;
            margin: 20px;
            background-color: initial;
            border: none;
            margin-top: 5%;
        }

        .button label {
            height: 15px;
            width: 15px;
            border-radius: 20px;
            background: #ffdb4a;
            margin: 0 4px;
            cursor: pointer;
            transition: all 0.5s ease;
        }

        .button label.active {
            width: 35px;
        }

        #one:checked~.button .one {
            width: 35px;
        }

        #one:checked~.button .two {
            width: 15px;
        }

        #two:checked~.button .one {
            width: 15px;
        }

        #two:checked~.button .two {
            width: 35px;
        }

        input[type="radio"] {
            display: none;
        }

        @media (max-width: 768px) {
            .main-card .cards .card {
                margin: 20px 0 10px 0;
                width: calc(100% / 2 - 10px);
            }
        }

        @media (max-width: 600px) {
            .main-card .cards .card {
                /* margin: 20px 0 10px 0; */
                width: 100%;
            }
        }

    </style>

    <div class="body44">
        <div class="container3">
            <p class="title  has-text-centered has-text-weight-bold mb-6">
                Our Student Say
            </p>
            <input type="radio" name="dot" id="one">
            <input type="radio" name="dot" id="two">
            <div class="main-card">
                <div class="cards">
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="images/img1.jpg" alt="">
                            </div>
                            <div class="details">
                                <div class="name">Andrew Neil</div>
                                <div class="job">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="images/img2.jpg" alt="">
                            </div>
                            <div class="details">
                                <div class="name">Jasmine Carter</div>
                                <div class="job">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="images/img3.jpg" alt="">
                            </div>
                            <div class="details">
                                <div class="name">Justin Chung</div>
                                <div class="job">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="{{ asset('/images/img4.jpg') }}" alt="">
                            </div>
                            <div class="details">
                                <div class="name">Appolo Reef</div>
                                <div class="job">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="{{ asset('/images/img5.jpg') }}" alt="">
                            </div>
                            <div class="details">
                                <div class="name">Adrina Calvo</div>
                                <div class="job">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="{{ asset('/images/img6.jpeg') }}" alt="">
                            </div>
                            <div class="details">
                                <div class="name">Nicole Lewis</div>
                                <div class="job">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <label for="one" class=" active one"></label>
                <label for="two" class="two"></label>
            </div>
        </div>
    </div>



</x-layouts.app>
