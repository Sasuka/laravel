<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LEARN LARAVEL</title>
    <style type="text/css">
        #wrapper {
            width: 980px;
            height: auto;
            margin: 0 auto;
        }

        #header {
            width: auto;
            height: 200px;
            background: #adda;

        }

        #content {
            width: auto;
            height: 500px;
            background: #afff0e;
        }

        #footer {
            width: auto;
            height: 200px;
            background: #ffd605;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div id="header">
        @section('sidebar')
            This is sidebar
        @show
    </div>
    <div id="content">
        @yield('content')
    </div>
    <div id="footer"></div>
</div>
</body>
</html>