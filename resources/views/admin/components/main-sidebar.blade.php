<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! url('dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                {{--<p>{{ Auth::user()->name }}</p>--}}
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Dashboard</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('#') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>

            <li class="treeview">
                <a href="{{ url('/#') }}"><i class="fa fa-link"></i> <span>Locations</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('#') }}">Registry</a></li>
                    <li><a href="{{ url('#') }}"> New </a></li>
                </ul>
            </li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
