<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/submit-form" method="POST">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name" placeholder="Enter name"> <br> 
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <label for="">email: </label>
        <input type="email" name="email" placeholder="Enter email"> <br> 
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <label for="">Course: </label>
        <input type="text" name="course" placeholder="Enter course"> <br> 
        <button type="submit">Submit</button>

    </form>
</body>
</html>