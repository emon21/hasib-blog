
@extends('layouts/frontend')
@section('content')


    <!-- Blog Section -->
    <!-- <section class="blog-sec section-default mt-4" id="blog">
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
        </div> -->

        <section class="page-title-sec jarallax over-layer-black">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                      <div class="default-title text-center">
                        
                              <h2>Total Post List : <span>{{ $post_list }}</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a
                                  page when looking.</p>
                      </div>
                  </div>
              </div>
          </div>


          <div class="container">

                            <div class="row">
                                @foreach($post as $key => $list)

                                <div class="col-md-4 col-sm-6 col-xs-6 full-wd600">
                                    <div class="serviceBox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                                        <!-- <div class="service-icon">
                                            <i class="zmdi zmdi-laptop-mac"></i>
                                        </div> -->
                                        <h4 class="text-left">{{ $list->blogky->category_name }}</h4>

                                        <img src="{{ asset('/storage/blog') }}/{{ $list->blog_picture }}" alt="">


                                        <h3 class="title">{{ $list->blog_name }}</h3>
                                        <a class="btn btn-warning" href="{{ url('postdetails',$list->id) }}">Read More</a>
                                        <p class="description">

                                        </p>
                                        <!-- <span class="number">{{ $key + 1 }}</span> -->
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                        </div>
                    </section>
@endsection
