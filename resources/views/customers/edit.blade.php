<!DOCTYPE html>
<html>
<head><title>Edit Customer</title></head>
<body>
<h1>Edit Customer</h1>
<form action="{{ route('customers.update', $customer) }}" method="POST">
    @csrf @method('PUT')
    <label>Name: <input type="text" name="name" value="{{ $customer->name }}"></label><br>
    <label>Email: <input type="email" name="email" value="{{ $customer->email }}"></label><br>
    <label>Phone: <input type="text" name="phone" value="{{ $customer->phone }}"></label><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
