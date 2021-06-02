<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body{
            padding: 20px;
        }
        .nav-bar{
            margin-bottom:20px;
        }
    </style>
    <meta name = "csrf token" content="{{csrf_token()}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @component('component_navbar',['current'=>$current])
            
        @endcomponent
        <div class="main">
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
            </main>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>