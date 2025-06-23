<!DOCTYPE html>

<html>

<head>
    @include('partials.head')
    <title>
        @yield('title')
    </title>

    @yield('head-content')
</head>

<body class="bg-pal-dark-semidark-gradient-center">

    <main class="container-fluid d-flex flex-column m-0 p-0 min-vh-100">
        @include('partials.navbar')

        @yield('content')
        
        @include('partials.footer')

    </main>

    @include('partials.tail')
</body>


</html>