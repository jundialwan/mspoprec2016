<!DOCTYPE html>
<html lang="en">
    <head>
        <title>jundialwan - </title>
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/winstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/winstrap-optional.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/mdl2.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
        
        <script src="{{ url('js/jquery.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/main.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-global theme-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="glyph glyph-hamburger"></i>
                        </button>
        
                        <a href="http://jundialwan.azurewebsites.net" class="navbar-brand">
                            <img src="{{ url('img/profile.png') }}" class="prof-pic" alt="Jundi Ahmad Alwan" height="24" />
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" role="button" aria-expanded="false">                                    
                                    <span class="glyph glyph-contact" aria-hidden="true"></span>                                                                        
                                </a>                                                                
                            </li>
                            
                            <li>
                                <a href="#" role="button" aria-expanded="false">                                    
                                    <span class="glyph glyph-edit" aria-hidden="true"></span>                                                                        
                                </a>                                                                
                            </li>
        
                            <li class="dropdown">
                                <a href="typography.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products <i class="glyph glyph-chevron-down-2"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="typography.html">Software &amp; services</a></li>
                                    <li><a href="typography.html#fonts">Devices &amp; Xbox</a></li>
                                    <li><a href="typography.html#sizes">For business</a></li>
                                    <li><a href="typography.html#headings">For developers &amp; IT pros</a></li>
                                    <li><a href="typography.html#subheadings">For students &amp; educators</a></li>
                                </ul>
                            </li>
        
                            <li class="dropdown">
                                <a href="layout.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Support <i class="glyph glyph-chevron-down-2"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="layout.html">Windows</a></li>
                                    <li><a href="layout.html#page-header">Office</a></li>
                                    <li><a href="layout.html#grid">Surface</a></li>
                                    <li><a href="layout.html#grid-small-gutters">Xbox</a></li>
                                    <li><a href="layout.html#spacers">Windows phone</a></li>
                                    <li><a href="layout.html#spacers">By resource</a></li>
                                    <li><a href="layout.html#spacers">Security &amp; updates</a></li>
                                    <li><a href="layout.html#spacers">Popular topics</a></li>
                                    <li><a href="layout.html#spacers">Sales &amp; orders</a></li>
                                    <li><a href="layout.html#spacers">Contact us</a></li>
                                </ul>
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>                   
        </nav>
        
        <div class="container-fluid">
            @yield('content')
        </div>
    </body>
</html>
