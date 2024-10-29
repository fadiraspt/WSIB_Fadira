<?php
require_once '../config/koneksiDb.php';
require_once '../Controller/crud.php';

$user_fullName = $_GET['user_fullname'];
$crd = new crud();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<h1>Selamat Datang <?php echo $user_fullName; ?></h1>
<table>
    <thead>
    <tr>
        <td>No</td>
        <td>Email</td>
        <td>Nama</td>
        <td>Aksi</td>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = $crd->lihatData();
    $no = 1;
    foreach ($data as $value) { ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $value['user_email'] ?></td>
            <td><?php echo $value['user_fullname'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $value['id'] ?>">Edit</a>
                <a href="delete.php?id=<?php echo $value['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php
        $no++;
    } ?>
    </tbody>
</table>
</body>
</html>