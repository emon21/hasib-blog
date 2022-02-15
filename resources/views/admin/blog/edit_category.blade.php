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
                                            <h4 class="m-t-0 m-b-30 text-center">Category Information </h4>

                                            <form class="form-horizontal" action="{{ url('admin/blog/blogcategoryupdate') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{ $blog_category->id }}">
                                            <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="category_name" value="{{ $blog_category->category_name }}" class="form-control" placeholder="Enter Your Service Name...">
                                                    </div>
                                                </div>



                                                 <div class="col-md-6 pull-right">
<input type="submit" value="Update Category" class="btn btn-success">
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
