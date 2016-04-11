<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            
        <div class="navbar">
            <div class="navbar-inner">
                
                <ul class="nav">
                   
                    <li><a href="/locations">Locations</a></li>
                    <li><a href="/stories">Stories</a></li>
                   
                </ul>
            </div>
        </div>
        @show

        <div class="container">
            @yield('content')
        </div>
        <div id="copyright text-right">Footer</div>
    </body>
</html>