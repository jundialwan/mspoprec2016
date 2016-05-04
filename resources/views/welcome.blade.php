<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>        

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ url('css/mdl2.css') }}" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Segoe UI', 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                font-family: 'Segoe UI';
                font-weight: 'bold';
            }
            
            .icon {
                color: grey;
                text-decoration: none !important;
                font-style: normal;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5 <i class="icon mdl2-add-friend"></i></div><br>
                <span>Now: <?php echo date('d F y, H:i:s', time()); ?></span><br>
                <span>DONE</span><br>
                <p>
                    <?php echo phpinfo(); ?>    
                </p>
            </div>
        </div>
    </body>
</html>
