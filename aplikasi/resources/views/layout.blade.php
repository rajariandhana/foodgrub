<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $namaHalaman }}</title>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/sidebar.css') }}">
    @yield('css')
    {{-- <link rel="stylesheet" href="{{url('css/neworder.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('css/menulist.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('css/cart.css')}}"> --}}
</head>

<body>
    {{-- <header> --}}
    {{-- <nav>
            <div class="left">
                <a href="/" id="homeButton"><h1>Home</h1></a>
            </div>
            <div class="right">
                <a href="/menus">Menu</a>
                <a href="/orders">Order History</a>
                <a href="/neworder">New Order</a>
            </div>
        </nav> --}}

    {{-- <li><a href="/categories" class="">categories</a></li> --}}
    {{-- <li><a href="/edit">edit</a></li> --}}
    {{-- </header> --}}

    <div class="sidebar">
        <a href="/" id="button-home">
            <h1>App</h1>
        </a>
        <div class="navigation">
            <a href="/menus"><img src="{{ url('icon/utensil.png') }}" alt="">Menu</a>
            <a href="/orders"><img src="{{ url('icon/list.png') }}" alt="">Order History</a>
            <a href="/neworder"><img src="{{ url('icon/cart.png') }}" alt="">New Order</a>
            <a href="/test"><img src="{{ url('icon/.png') }}" alt="">test</a>
        </div>

    </div>
    <div class="content-container">
        <div class="content">
            @yield('container')
        </div>
    </div>
</body>

</html>
