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

                                            <form class="form-horizontal" action="{{ url('admin/service/update_service') }}" method="POST" enctype="multipart/form-data">
                                            @csrf                                      <input type="hidden" name="service_id" value="{{ $service_list->id }}">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Service Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="service_name" class="form-control" placeholder="Enter Your Service Name..." value="{{ $service_list->service_name }}">
                                                    </div>
                                                </div>
                                           
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Service Description</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control note-editable panel-body" rows="5" name="service_desc" placeholder="Enter Your Service Description...!!"> {{ $service_list->service_description }} </textarea>
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Service Picture</label>
                                                    <div class="col-md-10">
                                                        <input type="file" name="service_picture" class="form-control" value="{{ $service_list->service_picture }}">
                                                        <img src="{{ asset('/storage/service') }}/{{ $service_list->service_picture }}" width="150" height="85">
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
