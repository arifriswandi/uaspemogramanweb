<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('images/icons/css/font-awesome.css') }}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Halaman Admin</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="{{ url('/') }}"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                               
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="{{ url('artist') }}"><i class="menu-icon icon-bold"></i> Artist </a></li>
                                <li><a href="{{ url('album') }}"><i class="menu-icon icon-book"></i>Album</a></li>
                                <li><a href="{{ url('track') }}"><i class="menu-icon icon-paste"></i>Track</a></li>
                                <li><a href="{{ url('played') }}"><i class="menu-icon icon-table"></i>Played</a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                </li>
                                <li> <a href="#" class="dropdown-item has-icon text-danger">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                </form>
                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

              </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            @yield('content')
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <script src="{{ asset('scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/flot/jquery.flot.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/common.js') }}"" type="text/javascript"></script>
      
    </body>
