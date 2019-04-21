<!DOCTYPE html>
<html lang="en">
<head>
    <title>DKCKS Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('cms/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('cms/css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('cms/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('cms/css/matrix-style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('cms/css/matrix-media.css') }}" />
    <link href="{{ URL::asset('cms/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('cms/css/jquery.gritter.css') }}" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="{{ URL::asset('cms/custom.js') }}"></script>

</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>

                <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="divider"></li>

            </ul>
        </li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" ><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>

        </li>
      </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
{{--<div id="search">--}}
    {{--<input type="text" placeholder="Search here..."/>--}}
    {{--<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>--}}
{{--</div>--}}
