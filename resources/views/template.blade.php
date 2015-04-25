<!doctype html>
<html>
    <head>
        <title>BOOK CURD - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            @if(Session::has('flash_message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                 
                {{ Session::get('flash_message') }}
            </div>
            @endif
            <br>
            @yield('content')
        </div>

    </body>
</html>