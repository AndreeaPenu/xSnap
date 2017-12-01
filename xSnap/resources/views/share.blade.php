<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <title>xSnap</title>

    </head>
    <body id="share">
        <div class="container">
            <div class="row">
                <a href="{{ url('/') }}" class="btn btn-danger btn-home">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
            </div>
            <div class="row">
                <a href="#" class="btn btn-primary btn-share">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i> SHARE
                </a>
                <a href="#" class="btn btn-success btn-print">
                    <i class="fa fa-print" aria-hidden="true"></i> PRINT
                </a>
                <a href="{{ url('/takepicture') }}" class="btn btn-danger btn-again">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i> TRY AGAIN
                </a>
            </div>
        </div>
        
      <script src="js/vue.min.js"></script>
      <script src="js/script.js"></script>
        
    </body>
</html>
