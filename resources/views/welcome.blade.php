<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
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
        }

    </style>
</head>

<body>
    <div class="container">
        <div>
            <a href="{{ url('/') }}">Index</a>
            <a href="{{ route('uker') }}">Export Uker</a>
            <a href="{{ route('perkanwil') }}">Per Kanwil</a>
            @if (!isset($type))
                <a href="{{ route('export') }}">Export All</a>
            @endif
        </div>
        @yield('content')
    </div>
</body>

</html>
