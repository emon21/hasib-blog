@extends('layouts/frontend')
@section('content')

        <!-- Page title -->
        <section class="jarallax over-layer-black" style="height:250px;background-position: center;
background-repeat: no-repeat;
padding: 180px 0 180px;
background:url('{{ asset('/storage/blog') }}/{{ $blog_details->blog_picture }}')">

        <!-- <section class="page-title-sec jarallax over-layer-black"> -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="text-danger">blog Details</h2>
                        <p><a href="index-one.html">Home</a> / <a href="#">Blog Details</a></p>
                    </div>
                </div>
            </div>
        </section>

@if($list->update_at)
{{ $list->created_at->diffForHumans() }}<br/>
{{ $list->created_at->format('d-M-Y h:i:s A') }}
@endif
        <!-- Blog Single Section -->
        <section class="blog-sec blog-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="{{ asset('/storage/blog') }}/{{ $blog_details->blog_picture }}" alt="">
                            </div>
                            <div class="blog-date text-left">
                                <ul>
                                    <li><i class="fa fa-user-circle"></i><a href="#">Mark Jonson</a></li>
                                    <li><i class="fa fa-calendar"></i><a href="#">August 20, 2018</a></li>
                                    <li><i class="fa fa-comment"></i><a href="#">5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4>{{ $blog_details->blog_name }}</h4>
                            <p class="text-justify">{{ $blog_details->blog_message }}</p>
                            <div class="highlight-text">
                                <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics This book is a treatise on the theory of ethics.</p>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="comment-row">
                                    <h3><a href="#">Comment(03)</a></h3>
                                    <div class="comment-item">
                                        <a class="pull-right" href="#">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </a>
                                        <img src="{{ asset('frontend') }}/images/blog/post-1.jpg" alt="">
                                        <h5>Nelson Maria</h5>
                                        <span>9 hours ago</span>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that.</p>
                                    </div>
                                    <div class="comment-item middel-item">
                                        <a class="pull-right" href="#">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </a>
                                        <img src="{{ asset('frontend') }}/images/blog/post-2.jpg" alt="">
                                        <h5>Rogar Task</h5>
                                        <span>7 hours ago</span>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that.</p>
                                    </div>
                                    <div class="comment-item">
                                        <a class="pull-right" href="#">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </a>
                                        <img src="{{ asset('frontend') }}/images/blog/post-3.jpg" alt="">
                                        <h5>Jessi Mardana</h5>
                                        <span>1 hours ago</span>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-area">
                                <form>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Write message here"></textarea>
                                        <button class="btn btn-default simple-default-btn" type="submit">Submit Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-4">
                        <div class="at-sidebar">
                            <div class="sidebar-search">
                                <form method="post">
                                    <div class="input-group">
                                        <input placeholder="Search Here....." class="form-control" name="search-field" type="text">
                                        <span class="input-group-btn">
                                      <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                      </span>
                                    </div>
                                </form>
                            </div>
                            <div class="categories clearfix">
                                <h3 class="sedebar-title">categories</h3>
                                <ul>
                                  @foreach($blog_cat as $categories)
                                    <li><a href="{{ url('/details',$categories->id) }}">{{ $categories->category_name }}</a> <span class="pull-right">{{ $blog_count; }}</span>
                                    </li>
                                    @endforeach
                                    <!-- <li><a href="#">web development</a> <span class="pull-right">(08)</span>
                                    </li>
                                    <li><a href="#">graphic design</a> <span class="pull-right">(29)</span>
                                    </li>
                                    <li><a href="#">popular design</a> <span class="pull-right">(33)</span>
                                    </li>
                                    <li><a href="#">modern design</a> <span class="pull-right">(23)</span>
                                    </li>
                                    <li><a href="#">exclusive</a> <span class="pull-right">(22)</span>
                                    </li>
                                    <li><a href="#">popular design</a> <span class="pull-right">(29)</span>
                                    </li>
                                    <li><a href="#">best design</a> <span class="pull-right">(11)</span>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="latest-news">
                                <h3 class="sedebar-title">latest news</h3>
                                <ul>
                                  @foreach($blog_list as $item)
                                    <li>
                                        <div class="news-item">
                                            <img src="{{ asset('/storage/blog') }}/{{ $item->blog_picture }}" alt="">
                                            <h4><a href="{{ url('/blogdetails',$item->id) }}">{{ $item->blog_name }}</a></h4>
                                            <p>August 22, 2018 <br> </p>
                                        </div>
                                    </li>
                                  @endforeach
                                </ul>
                            </div>
                            <div class="sidebar-tags">
                                <h3 class="sedebar-title">Tags</h3>
                                <a href="#">Responsive</a>
                                <a href="#">Web Design</a>
                                <a href="#">Best</a>
                                <a href="#">Modern Design</a>
                                <a href="#">Popular</a>
                                <a href="#">Servar</a>
                                <a href="#">Javascript</a>
                                <a href="#">Jquery</a>
                            </div>
                            <div class="blog-video">
                                <h3 class="sedebar-title">Video Preview</h3>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/EfTUpvxEbqc" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
