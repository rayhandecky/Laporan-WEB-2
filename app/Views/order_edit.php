<!DOCTYPE html>
<html>
<head>
    <title>Edit Order</title>
</head>
<body>
    <h1>Edit Order</h1>
    <form action="/order/update/<?= $order['id'] ?>" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" value="<?= $order['name'] ?>" required><br>
        
        <label for="email">Email</label><br>
        <input type="email" name="email" value="<?= $order['email'] ?>" required><br>
        
        <label for="phone">Phone</label><br>
        <input type="text" name="phone" value="<?= $order['phone'] ?>" required><br>
        
        <label for="vehicle">Vehicle</label><br>
        <input type="text" name="vehicle" value="<?= $order['vehicle'] ?>" required><br>
        
        <label for="service">Service</label><br>
        <input type="text" name="service" value="<?= $order['service'] ?>" required><br>
        
        <label for="message">Message</label><br>
        <textarea name="message" required><?= $order['message'] ?></textarea><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
