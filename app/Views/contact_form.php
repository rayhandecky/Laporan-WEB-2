<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Servis</title>
</head>
<body>
    <h1>Form Pemesanan Servis Kendaraan</h1>
    <form action="/contact/submit" method="post">
        <label for="name">Nama Pemilik:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Nomor Telepon:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="vehicle">Jenis Kendaraan:</label><br>
        <input type="text" id="vehicle" name="vehicle" required><br><br>

        <label for="service">Jenis Servis yang Dibutuhkan:</label><br>
        <input type="text" id="service" name="service" required><br><br>

        <label for="message">Pesan Tambahan:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
