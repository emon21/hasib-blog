   <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <!--<a href="index.html" class="logo"><span>Up</span>Bond</a>-->
                <!--<a href="index.html" class="logo-sm"><span>U</span></a>-->
                <a href="{{ url('admin/home') }}" class="logo"><img src="{{ asset('backend') }}/assets/images/logo.png" height="20" alt="logo"></a>
                <a href="index.html" class="logo-sm"><img src="{{ asset('backend') }}/assets/images/logo_sm.png" height="30" alt="logo"></a>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="ion-navicon"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown hidden-xs">
                                <a href="#" data-target="#"
                                    class="dropdown-toggle waves-effect waves-light notification-icon-box"
                                    data-toggle="dropdown" aria-expanded="true">
                                    <i class="ion-ios7-bell"></i> <span class="badge badge-xs badge-danger">17</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification <span
                                            class="badge badge-xs badge-success">3</span></li>
                                    <li class="list-group">
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <i class="fa fa-diamond text-danger noti-sm-icon"></i>
                                                <div class="noti-content">
                                                    <div class="media-heading">Your order is placed</div>
                                                    <p class="m-0">
                                                        <small>Dummy text of the printing and typesetting
                                                            industry.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <i class="fa  fa-envelope-o text-primary noti-sm-icon"></i>
                                                <div class="noti-content">
                                                    <div class="media-heading">New Message received</div>
                                                    <p class="m-0">
                                                        <small>You have 87 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <i class="fa fa-fighter-jet text-warning noti-sm-icon"></i>
                                            <div class="noti-content">
                                                <div class="media-heading">Your item is shipped.</div>
                                                <p class="m-0">
                                                    <small>It is a long established fact that a reader will</small>
                                                </p>
                                            </div>
                                        </a>
                                        <!-- last list item -->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <small class="text-primary">See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen"
                                    class="waves-effect waves-light notification-icon-box"><i
                                        class="ion-qr-scanner"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle profile waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{ asset('backend') }}/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle">
                                    <span class="profile-username">
                                       {{ Auth::user()->name }} <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"> Profile</a></li>
                                    <li><a href="javascript:void(0)"><span
                                                class="badge badge-success pull-right">5</span> Settings </a></li>
                                    <li><a href="javascript:void(0)"> Lock screen</a></li>
                                    <li class="divider"></li>
                                    {{-- <li><a href="javascript:void(0)"> Logout</a></li> --}}
                                     <li>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                     </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>