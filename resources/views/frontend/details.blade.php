@extends('layouts/frontend')
@section('content')

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

                      @foreach($blog_count as $list)
                        <div class="blog-slide col-md-8">
                            <div class="blog-img">
                                <img src="{{ asset('frontend') }}/images/blog/1.jpg" alt="">
                                <a href="blog-details.html" class="read">read more</a>
                            </div>
                            <div class="blog-content">
                                <span class="blog-author">
                                    <a href="#"><img src="{{ asset('frontend') }}/images/blog/post-1.jpg" alt=""></a>
                                </span>
                                <h3><a href="{{ url('/blogdetails',$list->id) }}">{{ $list->blog_name }}</a></h3>
                                <p class="blog-description">{{ $list->blog_message }}</p>
                            </div>
                            <ul class="blog-info">
                                <li><i class="fa fa-user-circle"></i><a href="#">Mark Jonson</a></li>
                                <li><i class="fa fa-calendar"></i><a href="#">August 20, 2018</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">5</a></li>
                            </ul>
                        </div>
                        @endforeach
                        <div class="col-md-4">
                          <div class="categories clearfix">
                              <h3 class="sedebar-title">categories</h3>
                              <ul>
                                @foreach($blog_cat as $categories)
                                  <li><a href="{{ url('/details',$categories->id) }}">{{ $categories->category_name }}</a> <span class="pull-right">{{ $blog_count; }}</span>
                                  </li>
                                  @endforeach
                              </ul>
                          </div>
                        </div>

                </div>
            </div>
        </div>
    </section>
@endsection
