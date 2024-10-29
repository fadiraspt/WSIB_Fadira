<?php
require_once '../config/koneksiDb.php';
require_once '../Controller/crud.php';

$crd = new crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST') :
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['fullname'];

    if ($crd->tambahData($email, $password, $name)) : ?>
        <div class="alert alert-success" role="alert">Data berhasil disimpan</div>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">Data gagal disimpan</div>
    <?php endif;
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="email">email</label>
    <input type="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <label for="nama">Nama Lengkap</label>
    <input type="text" name="fullname" required>

    <button type="submit" name="register">Register</button>
</form>
<a href="login.php">Login</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>