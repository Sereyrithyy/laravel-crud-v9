<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Customer</h1>

<form action="{{ route('customers.update', $customer) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $customer->name }}"><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $customer->email }}"><br><br>

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ $customer->phone }}"><br><br>

    <button type="submit">Update</button>
    <a href="{{ route('customers.index') }}">Back</a>
</form>
</body>
</html>