<!DOCTYPE html>
<html>
<head>
    <title>Create Order</title>
</head>
<body>
    <h1>Create New Order</h1>
    <form action="/order/store" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" required><br>
        
        <label for="email">Email</label><br>
        <input type="email" name="email" required><br>
        
        <label for="phone">Phone</label><br>
        <input type="text" name="phone" required><br>
        
        <label for="vehicle">Vehicle</label><br>
        <input type="text" name="vehicle" required><br>
        
        <label for="service">Service</label><br>
        <input type="text" name="service" required><br>
        
        <label for="message">Message</label><br>
        <textarea name="message" required></textarea><br>
        
        <button type="submit">Create</button>
    </form>
</body>
</html>
