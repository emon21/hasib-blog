
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
                                        <h4 class="" style="margin-top:25px;font-size:20px;">Tag List</h4>
                                        <a href="{{ url('admin/tag/addtag') }}" class="btn btn-info pull-right mt-1" style="margin-top:-42px;font-size:16px;">Add Tag</a>

                                        <table id="datatable" class="table table-striped table-bordered">

                                            <thead>
                                                <tr>
                                                    <th>SL No</th>
                                                    <th>Tag Name</th>
                                                    <th>Tag Slug</th>
                                                    <th>Tag Description</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                              @php
                                            $sl =1;
                                            @endphp
                                            @if($taglist->count())
                                            @foreach($taglist as $list)
                                                <tr>
                                                    <td width="10%" class="text-center">{{ $sl++; }}</td>
                                                    <td>{{ $list->name }}</td>
                                                    <td>{{ $list->slug }}</td>
                                                    <td>{{ $list->description }}</td>
                                                    <td class="text-center" width="22%">
  <!-- <a href="#" class="btn btn-primary">View</a> -->
  <a href="{{ url('admin/tag/tagedit',$list->id) }}" class="btn btn-success">Edit</a>
 <a href="{{ url('admin/tag/deletetag',$list->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure Delete this Item y/n ?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @else
                                              <tr>
                                                <td colspan="5">
                                                  <h5 class="text-danger text-center">No Tags Found</h5>
                                                </td>
                                              </tr>
                                            @endif

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->

                </div> <!-- Page content Wrapper -->


</div> <!-- content page-->
@include('admin/inc_file/footer');
