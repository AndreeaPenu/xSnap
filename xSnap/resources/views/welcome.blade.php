<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <title>xSnap</title>

    </head>
    <body id="start">
       <div class="container">
            <a href="{{ url('/backdrop') }}" class="btn btn-danger btn-start">
                <i class="fa fa-play-circle" aria-hidden="true"></i> START
            </a>
        </div>

      <script src="js/vue.min.js"></script>
      <script src="js/script.js"></script>
        
    </body>
</html>
