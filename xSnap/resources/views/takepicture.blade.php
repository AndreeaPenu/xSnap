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
                <a href="{{ url('/share') }}" class="btn btn-danger btn-camera">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </a>
                <a href="{{ url('/backdrop') }}" class="btn btn-success btn-backdrop">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                </a>
            </div>
        </div>
      <script src="js/vue.min.js"></script>
      <script src="js/script.js"></script>
        
    </body>
</html>
