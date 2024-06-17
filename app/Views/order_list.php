<!DOCTYPE html>
<html>
<head>
    <title>Order List</title>
</head>
<body>
    <h1>Order List</h1>
    <a href="/order/create">Create New Order</a>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Vehicle</th>
            <th>Service</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        <?php foreach($orders as $order): ?>
        <tr>
            <td><?= $order['name'] ?></td>
            <td><?= $order['email'] ?></td>
            <td><?= $order['phone'] ?></td>
            <td><?= $order['vehicle'] ?></td>
            <td><?= $order['service'] ?></td>
            <td><?= $order['message'] ?></td>
            <td>
                <a href="/order/edit/<?= $order['id'] ?>">Edit</a>
                <a href="/order/delete/<?= $order['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
