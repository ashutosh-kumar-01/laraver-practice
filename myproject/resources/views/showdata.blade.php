<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
</head>
<body>

<h1>All Students Data</h1>

<table border="1" cellpadding="10">

    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Password</th>
    </tr>

    @foreach($students as $student)

    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->password }}</td>
    </tr>

    @endforeach

</table>

</body>
</html>