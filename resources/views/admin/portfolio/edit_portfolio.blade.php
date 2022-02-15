 @include('admin/inc_file/header')

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        @include('admin/inc_file/top_bar')


        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        @include('admin/inc_file/left_sidebar')
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="page-content-wrapper ">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">
                                            <h4 class="m-t-0 m-b-30 text-center">Service Information </h4>

                                            <form class="form-horizontal" action="{{ url('admin/portfolio/updateportfolio') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="portfolio_id" value="{{ $portfoliolist->id }}">
                                            <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Name</label>
                                                    <div class="col-md-4">
                                                      <select class="form-control"  name="cat_id">
                                                        <option> >> Select Your Category << </option>
                                                        @foreach($portfoliocate as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name}}</option>
                                                        @endforeach
                                                      </select>
                                                        <!-- <input type="text" name="category_name" class="form-control" placeholder="Enter Your Category Name..."> -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Portfolio Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="portfolio_name" value="{{ $portfoliolist->portfolio_name }}" class="form-control" placeholder="Enter Your Portfolio Name...">
                                                        </div>
                                                    </div>

                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Portfolio Destanation</label>
                                                        <div class="col-md-10">
                                                          <textarea name="portfolio_desc"  value="{{ $portfoliolist->portfolio_description }}" class="form-control" placeholder="Enter Your Portfolio Description...!!" rows="8" cols="80">{{ $portfoliolist->portfolio_description }}</textarea>
                                                            <!-- <input type="text" name="portfolio_desc" class="form-control" placeholder="Enter Your Portfolio Name..."> -->
                                                        </div>
                                                    </div>

                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Portfolio Picture</label>
                                                        <div class="col-md-10">
                                                            <input type="file" name="portfolio_picture" class="form-control" value="{{ $portfoliolist->portfolio_description }}">
                                                            <!-- <img src="{{ asset('')}}" value="{{ $portfoliolist->portfolio_description }}" alt=""> -->
                                                            <img src="{{ asset('/storage/portfolio') }}/{{ $portfoliolist->portfolio_picture }}" width="150" height="85">
                                                        </div>
                                                    </div>

                                                 <div class="col-md-6 pull-right">
                                                      <input type="submit" value="Update Service" class="btn btn-success">
                                                 </div>

                                            </form>
                                        </div> <!-- panel-body -->
                                    </div> <!-- panel -->
                                </div> <!-- col -->
                            </div> <!-- End row -->




                    </div><!-- container -->


                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->
        @include('admin/inc_file/footer')
