<!DOCTYPE html>
<html lang="en">
    <head>
        <title>jundialwan - {{ $data['title'] }}</title>
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/winstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/winstrap-optional.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/mdl2.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
        
        <link rel="shortcut icon" href="favicon.ico" >
           
        <script src="{{ url('js/jquery.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/main.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top main-nav">
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
                                <a href="{{ url('/') }}" role="button" aria-expanded="false">
                                    Home                                    
                                </a>                                                                
                            </li>                                                                                                              
        
                            <li class="dropdown">
                                <a href="typography.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile <i class="glyph glyph-chevron-down-2"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="typography.html">About Me</a></li>
                                    <li><a href="typography.html#fonts">Education</a></li>
                                    <li><a href="typography.html#sizes">Organizational &amp; <br> Volunteering Experience</a></li>
                                    <li><a href="typography.html#headings">Project Experience</a></li>
                                    <li><a href="typography.html#subheadings">Honors & Awards</a></li>
                                    <li><a href="typography.html#subheadings">Interest</a></li>
                                    <li><a href="typography.html#subheadings">Technology</a></li>
                                </ul>
                            </li>
        
                            <!--<li class="dropdown">
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
                            </li>-->
                            
                            <li>
                                <a href="{{ url('blog') }}" role="button" aria-expanded="false">Blog</a>
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>                   
        </nav>
        
        <div class="container-fluid">
            @yield('content')
        </div>
        
        <div class="row blue-bg">
            <div class="col-md-24">                
                <div class="container text-center white">
                    Please be my friend! Reach me on.. <br>
                    <div class="btn-group">
                        <a href="http://facebook.com/jundi.alwan" target="_blank" class="btn blue white-bg btn-primary">Facebook</a>
                        <a href="http://twitter.com/ja_alwan" target="_blank" class="btn blue white-bg btn-primary">Twitter</a>
                        <a href="http://linkedin.com/in/jundialwan" target="_blank" class="btn blue white-bg btn-primary">LinkedIn</a>
                        <a href="http://github.com/jundialwan" target="_blank" class="btn blue white-bg btn-primary">GitHub</a>
                        <a href="http://line.me/ti/p/~jundialwan" target="_blank" class="btn blue white-bg btn-primary">LINE</a>
                        <a href="mailto:jundi.alwan@gmail.com" target="_blank" class="btn blue white-bg btn-primary">GMail</a>
                    </div>
                </div>
            </div>  
        </div>
        
        <div id="footer" class="row white-bg">
            <div class="col-md-24 text-center black">        
                
                Created by me using Laravel 5.2, winstrap, jQuery, and hosted by Microsoft Azure <br>
                Source code available on my github
            
                <br>
                <a href="http://github.com/jundialwan/mspoprec2016">
                    <img src="{{ url('img/github-sm-b.png') }}" alt="github">
                </a>    
                <br>                                
            </div>  
        </div>
    </body>
</html>
