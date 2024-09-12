<?php 
// Mengimpor file "person.php" yang berisi definisi kelas person.
include("person.php");

// Membuat objek baru dari kelas person dan menyimpannya dalam variabel $Fadira.
$Fadira = new person();
// Membuat objek baru dari kelas person dan menyimpannya dalam variabel $Fitri.
$Fitri = new person;

// Menetapkan nama "Fadira Septa" pada objek $Fadira menggunakan metode set_name.
$Fadira->set_name("Fadira Septa");
// Menetapkan nama "Fitri Meydayani" pada objek $Fitri menggunakan metode set_name.
$Fitri->set_name("Fitri Meydayani");

// Menampilkan nama lengkap dari objek $Fadira.
// Asumsi: Kelas person memiliki properti atau metode bernama 'name'.
// echo "Fadira's full name: ".$Fadira->name;: Menampilkan nama lengkap dari objek
echo "Fadira's full name: ".$Fadira->name;
?>
