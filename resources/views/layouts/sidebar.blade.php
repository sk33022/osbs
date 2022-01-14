<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('logo/swimlogo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BAJRA SPORTS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
      with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('reportUser')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chalkboard-teacher"></i>                        <p>
                            Instructor
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('instructor.show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>view Instructor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('hire.show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>My hirings</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>

                            Booking
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('book.insert')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('booking.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Booking</p>
                            </a>
                        </li>
                    </ul>
                </li>




{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('book.insert')}}" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-edit"></i>--}}
{{--                        <p>--}}
{{--                            Booking--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}


{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('booking.view')}}" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-edit"></i>--}}
{{--                        <p>--}}
{{--                           View Booking--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}


                <li class="nav-item">
                    <a class="log-out-btn" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
{{--<div class="control-sidebar-bg"></div>--}}



