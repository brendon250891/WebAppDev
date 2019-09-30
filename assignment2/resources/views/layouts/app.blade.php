<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Food Delivery Portal') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- JQuery -->
    <script src="{{ asset('jquery/jquery-3.4.1.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">    
    </nav>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Food Ordering Portal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{ url('restaurants') }}">{{ __('Restaurants') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('documentation') }}">{{ __('Documentation') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('popularDishes') }}">{{ __('Popular Dishes') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}?userType=consumer">{{ __('Register as a Consumer') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}?userType=restaurant">{{ __('Register as a Restaurant') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            @if (Auth::user()->userType === 'restaurant')
                            <li class="nav-item">
                                <a class="nav-link" href='{{ url("user") }}/{{ Auth::user()->id }}'>Menu</a>
                            <li>
                            <li class="nav-item">
                                <a class="nav-link" href='{{ url("user/orders") }}/{{ Auth::user()->id }}'>Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("user/statistics")}}/{{ Auth::user()->id }}">Statistics</a>
                            </li>
                            @elseif (Auth::user()->userType === 'consumer')
                            <li class="nav-item">
                                <a class="nav-link" href='{{ url("cart") }}/{{ Auth::user()->cart->id}}'>Cart({{ Auth::user()->cart->quantity }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href='{{ url("user/orders") }}/{{ Auth::user()->id }}'>Orders</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href='{{ url("user/administrator") }}/{{ Auth::user()->id }}'>Requests({{ count(Auth::user()->pendingRestaurants()) ?? 0 }})</a>
                            <li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
