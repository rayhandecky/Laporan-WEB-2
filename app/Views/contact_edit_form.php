<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak Umrah</title>
</head>
<body>
    <h1>Edit Kontak Umrah</h1>
    <form action="/contact/update" method="post">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">

        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" value="<?= $contact['name'] ?>" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?= $contact['email'] ?>" required><br><br>

        <label for="phone">Nomor Telepon:</label><br>
        <input type="tel" id="phone" name="phone" value="<?= $contact['phone'] ?>" required><br><br>

        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message" required><?= $contact['message'] ?></textarea><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
