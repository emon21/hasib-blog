
@include('admin/inc_file/header');

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        @include('admin/inc_file/top_bar');

     
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        @include('admin/inc_file/left_sidebar');
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->

                {{-- <div class="">
                    <div class="page-header-title">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div> --}}

                <div class="page-content-wrapper">

                   <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="" style="margin-top:25px;font-size:20px;">Student List</h4>
                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL No</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                          
                                            <tbody>
                                              @php
                                            $sl =1;
                                            @endphp
                                            @foreach($std_list as $list)
                                                <tr>
                                                    <td width="10%" class="text-center">{{ $sl++; }}</td>
                                                    <td>{{ $list->name }}</td>
                                                    <td>{{ $list->address }}</td>
                                                    <td class="text-center">
                                                    <a href="#" class="btn btn-primary">View</a>
                                                     <a href="#" class="btn btn-success">Edit</a>
                                                      <a href="#" class="btn btn-danger" onclick="return confirm('Are You Sure Delete this Item y/n ?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                               
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->

                </div> <!-- Page content Wrapper -->


</div> <!-- content page-->
@include('admin/inc_file/footer');
