<!DOCTYPE html>
<html lang="en">

<?php
require ('../Config/database.php');

$userEmail = null;
$userName = null;
$no = 1;

session_start();

if (!isset($_SESSION['username']))
{
    $_SESSION['msg'] = "Anda harus login terlebih dahulu";
    header('Location: ../Views/login.php');
    exit();
}

$sesion_id= $_SESSION['id'];
$sesion_username= $_SESSION['username'];
$sesion_level= $_SESSION['level'];
$dis = "";
if ($sesion_level == 1){
    $dis = "";
} else {
    $dis = "disabled";
}
$db =  new database();
$koneksi = $db->getConnection();

$query = "SELECT * FROM user_detail";
$statement = $koneksi->prepare($query);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Css    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style -->
    <style>
        /* Root */
        html,
        body {
            width: 100%;
            min-width: 100vh;
            min-height: 100vh;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        /* Main Container */
        .main-container {
            background-color: #e9ecef;
            max-height: 100%;
        }

        tr > td {
            pointer-events: none;
        }

    </style>
    <title>Home</title>
</head>

<body>
    <div class="container-fluid main-container m-0 p-0 w-100 min-vh-100 h-100 d-flex flex-column flex-grow-1">
        <h1 class="text-center">Selamat Datang <?php echo $_SESSION['username']; ?></h1>
        <div class="container-table w-100 h-100 p-4 flex-grow-1 overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Email</td>
                        <td>Nama</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                if ($result != null) {
                    foreach ($result as $row) {
                        $userEmail = $row['user_email'];
                        $userName = $row['user_fullname'];
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $userEmail; ?></td>
                            <td><?php echo $userName; ?></td>
                            <td>
                                <a href="../Views/update.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning" <?php echo $dis; ?>>Edit</button></a>
                                <a href="../Controller/delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger" <?php echo $dis; ?>>Hapus</button></a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data.</td></tr>";
                }
                ?>
                </tbody>
            </table>
            <a href="../Controller/logout.php">LogOut</a>
        </div>
    </div>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>