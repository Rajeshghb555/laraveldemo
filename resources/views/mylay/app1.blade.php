<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar ABCD 1234.
        @show

        <div class="container">
            @yield('content')
        </div>




    </body>
</html>