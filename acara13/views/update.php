<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

<?php

require '../Config/database.php';

$db = new database();
$koneksi = $db->getConnection();

$id = $_GET['id'];

$query = "SELECT * FROM user_detail WHERE id = ?";
$statement = $koneksi->prepare($query);
$statement->bindParam(1, $id);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
?>
<form action="../Controller/update.php" method="post">
    <label for="id">ID</label>
    <input type="text" name="id" value="<?php echo $id ?>">

    <label for="email">email</label>
    <input type="email" name="email" value="<?php echo $result['user_email']; ?>" readonly>

    <label for="password">password</label>
    <input type="password" name="password" value="<?php echo $result['user_password']; ?>">

    <label for="username">nama</label>
    <input type="text" name="username" value="<?php echo $result['user_fullname']; ?>">

    <button type="submit" name="update">Update</button>

    <a href="../Views/home.php">Kembali</a>
</form>
</body>
</html>