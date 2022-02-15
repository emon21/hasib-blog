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
                                            <h4 class="m-t-0 m-b-30 text-center">Blog Information </h4>

                                            <form class="form-horizontal" action="{{ url('admin/tag/taginsert') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                    <label class="col-md-2 control-label">Tag Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="tag_name" class="form-control" placeholder="Enter Your Tag Name...">
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Tag Description</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control note-editable panel-body" rows="5" name="tag_desc" placeholder="Enter Your Tag Description...!!"></textarea>
                                                    </div>
                                                </div>



                                                 <div class="col-md-6 pull-right">
                                                   <input type="submit" value="Add Tag" class="btn btn-success">
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
