<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="test-align:center">Grocery Items</h1>

    <table style="border: 2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        @foreach($items as $items)
        <tr>
            <td>{{ $items->id }}</td>
            <td>{{ $items->name }}</td>
            <td>{{ $items->quantity }}</td>
            <td>{{ $items->price }}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>