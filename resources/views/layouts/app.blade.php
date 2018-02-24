<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar">Table</span>
                        <span class="icon-bar">Chart</span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                     @if (Auth::guest())
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Dell
                    </a>
                     @else
                     <ul class="nav navbar-nav navbar-left">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    November <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('novWeek1') }}">Week 1</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('novWeek2') }}">Week 2</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('novWeek3') }}">Week 3</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('novWeek4') }}">Week 4</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    December <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('decWeek1') }}">Week 1</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('decWeek2') }}">Week 2</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('decWeek3') }}">Week 3</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('decWeek4') }}">Week 4</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    January <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('janWeek1') }}">Week 1</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('janWeek2') }}">Week 2</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('janWeek3') }}">Week 3</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('janWeek4') }}">Week 4</a>
                                    </li>
                                </ul>
                            </li>
                     </ul> 
                     @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                         &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
