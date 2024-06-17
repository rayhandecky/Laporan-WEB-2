<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kontak</title>
</head>
<body>
    <h1>Terima Kasih Telah Menghubungi Kami!</h1>
    <p><strong>Nama:</strong> <?= esc($name) ?></p>
    <p><strong>Email:</strong> <?= esc($email) ?></p>
    <p><strong>Nomor Telepon:</strong> <?= esc($phone) ?></p>
    <p><strong>Pesan:</strong> <?= esc($message) ?></p>
</body>
</html>
