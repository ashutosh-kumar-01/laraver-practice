<!DOCTYPE html>
<html>
<head>
    <title>Laravel Cookies</title>
</head>
<body>

    <h2>Laravel Cookie Example</h2>

    <a href="{{ url('/set-cookie') }}">
        <button>Set Cookie</button>
    </a>

    <br><br>

    <a href="{{ url('/get-cookie') }}">
        <button>Get Cookie</button>
    </a>

    <br><br>

    <a href="{{ url('/delete-cookie') }}">
        <button>Delete Cookie</button>
    </a>

</body>
</html>