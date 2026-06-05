<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>

<h1>All Product List</h1>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>

    @foreach($students as $student)

    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->price }}</td>
    </tr>

    @endforeach

</table>

</body>
</html>