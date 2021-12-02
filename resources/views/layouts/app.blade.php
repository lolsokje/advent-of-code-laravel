<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">

    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        body * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Source Code Pro", monospace;
            background-color: #0F0F23;
            color: #CCCCCC;
        }

        .wrapper {
            position: relative;
            height: auto;
            margin: 2em auto 0 auto;
        }

        .box {
            max-width: 70%;
            min-height: auto;
            margin: 0 auto;
            padding: 1em 1em;
            text-align: center;
        }

        .error {
            background: url({{ asset('images/flame.png') }}) no-repeat top 10em center/128px 128px,
            transparent url({{ asset('images/desktop-pc.png') }}) no-repeat top 13em center/128px 128px;
        }

        h1, p:not(:last-of-type) {
            text-shadow: 0 0 6px #216f79;
        }

        h1 {
            margin: 0 0 1rem 0;
            font-size: 8em;
        }

        p {
            margin-bottom: 0.5em;
            font-size: 3em;
        }

        p:first-of-type {
            margin-top: 4em;
        }

        p > a {
            font-style: italic;
            text-decoration: none;
            color: #009900;
        }

        p > a:hover {
            color: #99FF99;
        }

        p img {
            vertical-align: bottom;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="box">
        @yield('content')
    </div>
</div>
</body>
</html>
