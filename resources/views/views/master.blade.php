<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LEARN LARAVEL</title>
    <link rel="stylesheet" href="{{asset('/public/templates/css/mystyle.css')}}">
</head>
<body>
<div id="wrapper">
    <div id="header">
        @section('sidebar')
            @include('views.marquee',['mar_content'=>'Chào mừng các bạn đến với khóa học laravel'])
        @show
    </div>
    <div id="content">
        @yield('content')
    </div>
    {{--<div id="footer"></div>--}}
</div>
</body>
</html>