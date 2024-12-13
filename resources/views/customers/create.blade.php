<!DOCTYPE html>
<html>
<head><title>Add Customer</title></head>
<body>
<h1>Add Customer</h1>
<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <label>Name: <input type="text" name="name"></label><br>
    <label>Email: <input type="email" name="email"></label><br>
    <label>Phone: <input type="text" name="phone"></label><br>
    <button type="submit">Add</button>
</form>
</body>
</html>
