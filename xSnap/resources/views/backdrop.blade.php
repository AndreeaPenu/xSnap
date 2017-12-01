<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <title>xSnap</title>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <img class="logo" src="{{asset('/img/logo.png')}}" alt="xSnap logo">
                <a href="{{ url('/') }}" class="btn btn-danger btn-home">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
            </div>
            <div class="row">
                <div class="backdrop-picture"></div>
                <div class="backdrop-picture"></div>
                <div class="backdrop-picture"></div>
            </div>
            <div class="row">
                <a href="{{ url('/takepicture') }}" class="btn btn-danger btn-next">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i> NEXT
                </a>
            </div>
        </div>

      <script src="js/vue.min.js"></script>
      <script src="js/script.js"></script>
        
    </body>
</html>
