@extends('layouts/frontend')
@section('content')
    <div class="welcome-section welcome-section-two jarallax over-layer-black" id="water-ripples">
        <div class="welcome-table">
            <div class="welcome-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="welcome-col text-center">
                                <h1>Hi, Im <span>Collis Monro</span></h1>
                                <h3 class="cd-headline clip">
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">I am a web Developer</b>
                                        <b>I am very Professional</b>
                                        <b>Get my valuable services</b>
                                    </span>
                                </h3>
                                <ul>
                                    @foreach ($social__links as $social)
                                        <li><a href="{{ $social->social_url }}"><i
                                                    class="{{ $social->social_icon }}"></i></a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="about-section about-two-section section-default" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-col col-default">
                        <img src="{{ asset('frontend') }}/images/about/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-col col-default">
                        <h2>Few Words about me</h2>
                        @foreach ($abouts as $list)
                            <p>{{ $list->message }}</p>
                        @endforeach

                        <h3>My Skills : </h3>
                        <h5>Programming Languages & Tools</h5>
                        <!-- Progress Bar Start -->
                        @foreach ($about_skills as $list)
                            <div class="progress-box">
                                <h5>{{ $list->skill_name }} <span
                                        class="color-heading pull-right">{{ $list->skill_complate }} %</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-color-danger" role="progressbar"
                                        data-width="{{ $list->skill_complate }}"></div>
                                </div>
                            </div>
                        @endforeach


                        <br>
                        <!-- Progress Bar Start -->

                        <button class="btn btn-default simple-default-btn" type="submit">Download Resume</button>
                        <button class="btn btn-default simple-default-btn btn-black" type="submit">Hire Me</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section class="service-section section-default" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="default-title text-center">
                        <h2>what I do</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $key => $list)
                    <div class="col-md-4 col-sm-6 col-xs-6 full-wd600">
                        <div class="serviceBox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="service-icon">
                                <i class="zmdi zmdi-laptop-mac"></i>
                            </div>
                            <h3 class="title">{{ $list->service_name }}</h3>
                            <p class="description">
                                {{ $list->service_description }}
                            </p>
                            <span class="number">{{ $key + 1 }}</span>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="counter-sec section-default jarallax over-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 full-wd600">
                    <div class="counter-box col-default wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="counter">{{ $overviews->project_complate }}</div>
                        <p>PROJECTS COMPLETED</p>
                        <i class="fa fa-handshake-o"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 full-wd600">
                    <div class="counter-box col-default wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="counter">{{ $overviews->happy_clients }}</div>
                        <p>HAPPY CLIENTS</p>
                        <i class="fa fa-heart"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 full-wd600">
                    <div class="counter-box col-default wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="counter">{{ $overviews->cups_of_tea }}</div>
                        <p>Cups of tea</p>
                        <i class="fa fa-coffee"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 full-wd600">
                    <div class="counter-box col-default wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="counter">{{ $overviews->winning_awards }}</div>
                        <p>Winning Awards</p>
                        <i class="fa fa-trophy"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section section-default" id="work">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="default-title text-center">
                        <h2>My Portfolio</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-col">
                    <!-- Filter Nav -->
                    <ul class="portfolio-nav">
                        <li data-filter="all"> All </li>
                        <li data-filter="1"> Web Design </li>
                        <li data-filter="2"> Grapich </li>
                        <li data-filter="3"> Mobile app </li>
                    </ul>
                    <!-- Filter Content -->
                    <div class="filtr-container">
                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 2" data-sort="value">
                            <div class="portfolio-item">
                                <img src="{{ asset('frontend') }}/images/portfolio/1.jpg" class="img-responsive"
                                    alt="portfolio">
                                <div class="portfolio-item-info">
                                    <div class="item-caption">
                                        <ul>
                                            <li>
                                                <a href="{{ asset('frontend') }}/images/portfolio/1.jpg"
                                                    data-lightbox="lightbox" data-title="my project title"><i
                                                        class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                        <h4><a href="#">my project title</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 1" data-sort="value">
                            <div class="portfolio-item">
                                <img src="{{ asset('frontend') }}/images/portfolio/2.jpg" class="img-responsive"
                                    alt="portfolio">
                                <div class="portfolio-item-info">
                                    <div class="item-caption">
                                        <ul>
                                            <li>
                                                <a href="{{ asset('frontend') }}/images/portfolio/2.jpg"
                                                    data-lightbox="lightbox" data-title="my project title"><i
                                                        class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                        <h4><a href="#">my project title</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 1" data-sort="value">
                            <div class="portfolio-item">
                                <img src="{{ asset('frontend') }}/images/portfolio/3.jpg" class="img-responsive"
                                    alt="portfolio">
                                <div class="portfolio-item-info">
                                    <div class="item-caption">
                                        <ul>
                                            <li>
                                                <a href="{{ asset('frontend') }}/images/portfolio/3.jpg"
                                                    data-lightbox="lightbox" data-title="my project title"><i
                                                        class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                        <h4><a href="#">my project title</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 2" data-sort="value">
                            <div class="portfolio-item">
                                <img src="{{ asset('frontend') }}/images/portfolio/4.jpg" class="img-responsive"
                                    alt="portfolio">
                                <div class="portfolio-item-info">
                                    <div class="item-caption">
                                        <ul>
                                            <li>
                                                <a href="{{ asset('frontend') }}/images/portfolio/4.jpg"
                                                    data-lightbox="lightbox" data-title="my project title"><i
                                                        class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                        <h4><a href="#">my project title</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 2" data-sort="value">
                            <div class="portfolio-item">
                                <img src="{{ asset('frontend') }}/images/portfolio/5.jpg" class="img-responsive"
                                    alt="portfolio">
                                <div class="portfolio-item-info">
                                    <div class="item-caption">
                                        <ul>
                                            <li>
                                                <a href="{{ asset('frontend') }}/images/portfolio/5.jpg"
                                                    data-lightbox="lightbox" data-title="my project title"><i
                                                        class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                        <h4><a href="#">my project title</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 1" data-sort="value">
                            <div class="portfolio-item">
                                <img src="{{ asset('frontend') }}/images/portfolio/6.jpg" class="img-responsive"
                                    alt="portfolio">
                                <div class="portfolio-item-info">
                                    <div class="item-caption">
                                        <ul>
                                            <li>
                                                <a href="{{ asset('frontend') }}/images/portfolio/6.jpg"
                                                    data-lightbox="lightbox" data-title="my project title"><i
                                                        class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                        <h4><a href="#">my project title</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section jarallax over-layer-black" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="default-title text-center">
                        <h2>what Client say</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
                        @foreach ($clients as $list)
                            <div class="testimonial-item">
                                <div class="testimonial-item-content">
                                    <div class="testimonial-img">
                                        <img src="{{ $list->client_img }}" alt="">
                                    </div>
                                    {{-- {{ asset('storage') }}/{{ $value->std_picture }} --}}
                                    {{-- {{ $list->client_img }} --}}
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>{{ $list->client_message }}</p>
                                    <h4>{{ $list->client_name }}</h4>
                                    {{-- <span>CEO, Envato</span> --}}
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-sec section-default" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="default-title text-center">
                        <h2>Latest <span>News</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
                        <div class="blog-slide">
                            <div class="blog-img">
                                <img src="{{ asset('frontend') }}/images/blog/1.jpg" alt="">
                                <a href="blog-details.html" class="read">read more</a>
                            </div>
                            <div class="blog-content">
                                <span class="blog-author">
                                    <a href="#"><img src="{{ asset('frontend') }}/images/blog/post-1.jpg" alt=""></a>
                                </span>
                                <h3><a href="blog-details.html">Here is the Post title</a></h3>
                                <p class="blog-description">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected.</p>
                            </div>
                            <ul class="blog-info">
                                <li><i class="fa fa-user-circle"></i><a href="#">Mark Jonson</a></li>
                                <li><i class="fa fa-calendar"></i><a href="#">August 20, 2018</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">5</a></li>
                            </ul>
                        </div>
                        <div class="blog-slide">
                            <div class="blog-img">
                                <img src="{{ asset('frontend') }}/images/blog/2.jpg" alt="">
                                <a href="blog-details.html" class="read">read more</a>
                            </div>
                            <div class="blog-content">
                                <span class="blog-author">
                                    <a href="#"><img src="{{ asset('frontend') }}/images/blog/post-2.jpg" alt=""></a>
                                </span>
                                <h3><a href="blog-details.html">Here is the Post title</a></h3>
                                <p class="blog-description">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected.</p>
                            </div>
                            <ul class="blog-info">
                                <li><i class="fa fa-user-circle"></i><a href="#">Mark Jonson</a></li>
                                <li><i class="fa fa-calendar"></i><a href="#">August 21, 2018</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">5</a></li>
                            </ul>
                        </div>
                        <div class="blog-slide">
                            <div class="blog-img">
                                <img src="{{ asset('frontend') }}/images/blog/3.jpg" alt="">
                                <a href="blog-details.html" class="read">read more</a>
                            </div>
                            <div class="blog-content">
                                <span class="blog-author">
                                    <a href="#"><img src="{{ asset('frontend') }}/blog/post-3.jpg" alt=""></a>
                                </span>
                                <h3><a href="blog-details.html">Here is the Post title</a></h3>
                                <p class="blog-description">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected.</p>
                            </div>
                            <ul class="blog-info">
                                <li><i class="fa fa-user-circle"></i><a href="#">Mark Jonson</a></li>
                                <li><i class="fa fa-calendar"></i><a href="#">August 22, 2018</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">2</a></li>
                            </ul>
                        </div>
                        <div class="blog-slide">
                            <div class="blog-img">
                                <img src="{{ asset('frontend') }}/images/blog/4.jpg" alt="">
                                <a href="blog-details.html" class="read">read more</a>
                            </div>
                            <div class="blog-content">
                                <span class="blog-author">
                                    <a href="#"><img src="{{ asset('frontend') }}/images/blog/post-4.jpg" alt=""></a>
                                </span>
                                <h3><a href="blog-details.html">Here is the Post title</a></h3>
                                <p class="blog-description">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected.</p>
                            </div>
                            <ul class="blog-info">
                                <li><i class="fa fa-user-circle"></i><a href="#">Mark Jonson</a></li>
                                <li><i class="fa fa-calendar"></i><a href="#">August 25, 2018</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">2</a></li>
                            </ul>
                        </div>
                        <div class="blog-slide">
                            <div class="blog-img">
                                <img src="{{ asset('frontend') }}/images/blog/5.jpg" alt="">
                                <a href="blog-details.html" class="read">read more</a>
                            </div>
                            <div class="blog-content">
                                <span class="blog-author">
                                    <a href="#"><img src="{{ asset('frontend') }}/blog/post-5.jpg" alt=""></a>
                                </span>
                                <h3><a href="blog-details.html">Here is the Post title</a></h3>
                                <p class="blog-description">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected.</p>
                            </div>
                            <ul class="blog-info">
                                <li><i class="fa fa-user-circle"></i><a href="#">Mark Jonson</a></li>
                                <li><i class="fa fa-calendar"></i><a href="#">August 27, 2018</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">6</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-sec section-default over-layer-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2>Reach Me</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="info-box">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Address: 20/11 Pallet Street, Poughkeepsie, New York
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="info-box">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>(+01) 123 456 7890</p>
                            <p>(+01) 123 456 7891</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="info-box">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>Yourmail@gamil.com</p>
                            <p>officemail@gamil.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-default">
                        <div class="row">
                            <div id="form-messages">


                            </div>
                            {{-- @if (Session('success'))
                                <div class="alert alert-success">{{ Session('success') }} </div>
                            @endif --}}
                            <form id="ajax-contact" method="post" action="{{ url('/contactprocess') }}">
                                @csrf
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="numbar" name="phone"
                                        placeholder="Phone No..." required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control textarea-hight-full" id="message" name="message" rows="6" placeholder="Message"
                                        required></textarea>
                                    <button class="btn btn-default simple-default-btn" type="submit">Sent
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-default">
                        <div id="map" style="width:100%; height:350px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
