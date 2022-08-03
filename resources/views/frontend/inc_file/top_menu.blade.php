 <header class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Navigation -->
                    <nav class="navbar navbar-default navbar-fixed-top main-nav">
                        <div class="container">
                            <div class="navbar-header page-scroll">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="navbar-brand">
                                    <a class="logo-black" href="{{ url('/') }}"><img src="{{ asset('frontend') }}/images/logo.png" alt="">
                                    </a>
                                    <a class="logo-white" href="{{ url('/') }}"><img src="{{ asset('frontend') }}/images/logo-white.png" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                                    <li>
                                        <a class="page-scroll" href="#page-top">Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#service">Service</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#work">Protfolio</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                    {{--  <li>
                                        <a class="page-scroll {{ url('/blog') ? 'active' : ''  }}" href="{{ url('/blog')}}">Blog</a>
                                    </li>  --}}
                                    <li>
                                        <a class="link " href="{{ url('/blog')}}">Blog</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
