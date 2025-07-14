<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Customer List</h1>
<a href="{{ route('customers.create') }}">Add New Customer</a>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Name</th><th>Email</th><th>Phone</th><th>Actions</th>
    </tr>
    @foreach($customers as $customer)
    <tr>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->phone }}</td>
        <td>
            <a href="{{ route('customers.edit', $customer) }}">Edit</a>
            <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Delete?')" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>