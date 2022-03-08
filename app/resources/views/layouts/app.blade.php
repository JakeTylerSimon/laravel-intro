<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Intro</title>
    <style>
        .body_app {
            background: lightgray;
        }
        .nav_app {
            padding: 6px;
            background: white;
            display: flex;
            justify-content: space-between;
        }
        .list {
            display: flex;
            align-items: center;
        }
        a {
            padding: 3rem;
        }
        ul {
            list-style-type: none;
        }
    </style>
</head>
<body class="body_app">
    <nav class="nav_app">
        <ul class="list">
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Dashboard</a>
            </li>
            <li>
                <a href="">Post</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>