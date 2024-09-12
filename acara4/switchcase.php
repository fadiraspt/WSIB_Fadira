<?php
// Menetapkan nilai variabel $role dengan "sales".
$role = "sales";

// Memulai struktur switch untuk memeriksa nilai variabel $role.
switch ($role) {
    // Jika $role adalah "admin", maka tampilkan pesan "Anda login sebagai admin".
    case "admin":
        echo "Anda login sebagai admin";
        // Setelah mencetak pesan, hentikan switch dengan break.
        break;
    // Jika $role adalah "teknisi", maka tampilkan pesan "Anda login sebagai teknisi".
    case "teknisi":
        echo "Anda login sebagai teknisi";
        // Setelah mencetak pesan, hentikan switch dengan break.
        break;
    // Jika $role adalah "sales", maka tampilkan pesan "Anda login sebagai sales"
    case "sales":
        echo "Anda login sebagai sales";
        // Setelah mencetak pesan, hentikan switch dengan break.
        break;
    // Jika tidak ada case yang cocok, tampilkan pesan "Role tidak dikenali".
    default:
        echo "Role tidak dikenali";
}

// Informasi tambahan
// Nama: Fadira Septa
// NIM: E41232302
// Golongan: C
// ACARA 4
// Perulangan pada PHP
?>
