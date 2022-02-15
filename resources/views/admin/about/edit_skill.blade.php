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
                                            <h4 class="m-t-0 m-b-30 text-center">About Skill Information </h4>

                                            <form class="form-horizontal" action="{{ url('admin/about/skillupdate') }}" method="POST">
                                            @csrf                                            <input type="hidden" value="{{ $skill_list->id }}" name="skill_id">
                                            <div class="form-group">
                                                    <label class="col-md-2 control-label">Skill Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="skill_name" class="form-control" placeholder="Enter Your Skill Name..." value="{{ $skill_list->skill_name }}">
                                                    </div>
                                                </div>

                                                  <div class="form-group">
                                                    <label class="col-md-2 control-label">Skill Complate</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="skill_complate" class="form-control" placeholder="Enter Your Skillcomplate..."  value="{{ $skill_list->skill_complate }}">
                                                    </div>
                                                </div>
                                             
                                                {{-- <div class="form-group">
                                                    <label class="col-md-2 control-label">About Description</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control note-editable panel-body" rows="5" name="about_desc"></textarea>
                                                    </div>
                                                </div> --}}

                                                 <div class="col-md-6 pull-right">
<input type="submit" value="Update Skill" class="btn btn-info">
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
