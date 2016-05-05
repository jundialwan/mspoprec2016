<!DOCTYPE html>
<html lang="en">
    <head>
        <title>jundialwan - </title>
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
        
        <script src="{{ url('js/jquery.min.js') }}"></script>
        <script src="{{ url('js/main.js') }}"></script>
    </head>
    <body>
         <div class="container-fluid">
             @yield('content')
         </div>
    </body>
</html>
