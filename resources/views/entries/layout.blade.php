<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learning Journal | @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="My personal learning journal">
    <meta name="author" content="Joseph Yhu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <nav>
        <a href="{{ route('categories.index') }}">Categories</a>
        <a href="{{ route('entries.index') }}">Entries</a>
        <a href="{{ route('users.index') }}">Users</a>
    </nav>
    @yield('content')
</div>

<footer>
    Copyright &copy; <?php echo date("Y"); ?> <a href="https://teamtreehouse.com/josephyhu" target="_blank">Joseph Yhu</a><br>
    <a href="mailto:josephsyhu@gmail.com" target="_blank">josephsyhu@gmail.com</a>
</footer>
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
