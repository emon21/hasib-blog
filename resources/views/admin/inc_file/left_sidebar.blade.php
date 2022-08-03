<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <form class="sidebar-search">
            <div class="">
                <input type="text" class="form-control search-bar" placeholder="Search...">
            </div>
            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
        </form>

        <div class="user-details">
            <div class="text-center">
                <img src="{{ asset('backend') }}/assets/images/users/avatar-1.jpg" alt="" class="img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Hi,
                        {{ Auth::user()->name }}<span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"> Profile</a></li>
                        <li><a href="javascript:void(0)"> Settings</a></li>
                        <li><a href="javascript:void(0)"> Lock screen</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)"> Logout</a></li>
                    </ul>
                </div>

                <!--<p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>-->
            </div>
        </div>
        <!--- Divider -->


        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="waves-effect"><i class="ti-home"></i><span>
                            Dashboard
                            <span class="badge badge-primary pull-right">21</span></span></a>
                </li>

                {{-- <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span> Charts
                                </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-flot.html">Flot Chart</a></li>
                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                <li><a href="charts-other.html">Other Chart</a></li>
                            </ul>
                        </li> --}}

                {{-- <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Forms
                                </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="form-elements.html">General Elements</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-advanced.html">Advanced Form</a></li>
                                <li><a href="form-editors.html">Form Editors</a></li>
                                <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-xeditable.html">Form Xeditable</a></li>
                            </ul>
                        </li> --}}


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-list"></i><span>
                            About
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        {{-- <li><a href="{{ url('studentList') }}">Student List</a></li> --}}
                        {{-- <li><a href="{{ url('admin/about') }}">About Add</a></li> --}}
                        <li><a href="{{ url('admin/aboutlist') }}">About List</a></li>
                        <li><a href="{{ url('admin/about/aboutskill') }}">Skill list</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-list"></i><span>
                            All Service
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">

                        <li><a href="{{ url('admin/service/servicelist') }}">Service List</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-list"></i><span>
                            All Contact
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">

                        <li><a href="{{ url('admin/contact/contactlist') }}">Contact List</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Portfolio
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/portfolio/categorylist') }}">Category List</a></li>
                        <li><a href="{{ url('admin/portfolio/portfolio') }}">Portfolio List</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span> Tags
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/tag/taglist') }}">Tag List</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span> Blogs
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/blog/categorylist') }}">Category List</a></li>
                        <li><a href="{{ url('admin/blog/bloglist') }}">Blog List</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span> Menus
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/menu/menulist') }}">Menu List</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span> Social
                            List
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/menu/menulist') }}">Menu List</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span> Overview
                            List
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/menu/menulist') }}">Menu List</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span> Client
                            List
                        </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/menu/menulist') }}">Menu List</a></li>

                    </ul>
                </li>

                <li>
                    <a href="{{ url('/') }}" target="_blank" class="waves-effect"><i
                            class="ti-world"></i><span>
                            Website
                            <span class="badge badge-primary pull-right">4</span></span></a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
