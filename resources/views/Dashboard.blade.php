<!DOCTYPE html>
<html lang="pl" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ URL::asset('CSS/dashboard.css'); }} ">

    @yield('head')
</head>

<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
            <header>
                <a href="/dashboard">Journaling</a>
            </header>
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-view-dashboard"></i> Wpisy
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-link"></i> Shortcuts
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-widgets"></i> Overview
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-calendar"></i> Events
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-info-outline"></i> About
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-settings"></i> Services
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-comment-more"></i> Contact
                    </a>
                </li>
            </ul>
        </div>
        <!-- Content -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                            </a>
                        </li>
                        <li><a href="#">{{Auth::User()->name}}</a></li>
                        <li><a href="/logout" style="color: red;">Wyloguj się</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
