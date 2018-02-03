<header class="main-header">

    <!-- Logo -->
    <a href="home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>L</b>C!</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Lidl</b>Crunch!</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <h4 class="text-center">Instellingen <i class="fa fa-gears"></i></h4>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <!-- /.control-sidebar-menu -->
            <ul class="control-sidebar-menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="btn btn-primary btn-flat">Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">{{ csrf_field() }}</form>
                    {{--<a href="javascript:;">--}}
                        {{--<h4 class="control-sidebar-subheading">--}}
                            {{--Custom Template Design--}}
                            {{--<span class="pull-right-container">--}}
                    {{--<span class="label label-danger pull-right">70%</span>--}}
                    {{--</span>--}}
                        {{--</h4>--}}

                        {{--<div class="progress progress-xxs">--}}
                            {{--<div class="progress-bar progress-bar-danger" style="width: 70%"></div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->
