<?php


// Mendeklarasikan variabel $tanggal dengan nilai "2024-09-02"
// Ini adalah tanggal yang untuk dicek ketersediaannya
$tanggal = "2024-09-02";

// Mendeklarasikan array $tanggal_tersedia berisi daftar tanggal yang tersedia
$tanggal_tersedia = ["2024-09-01", "2024-09-02", "2024-09-03"];  // Tanggal yang tersedia

// Menampilkan isi dari array $tanggal_tersedia menggunakan var_dump()
var_dump($tanggal_tersedia);  


// in_array() digunakan untuk mengecek apakah suatu nilai terdapat di dalam array
if (in_array(trim($tanggal), $tanggal_tersedia)) {
    // Jika $tanggal ditemukan di dalam $tanggal_tersedia, tampilkan pesan bahwa tiket tersedia
    echo "Tiket tersedia untuk tanggal tersebut.";
} else {
    // Jika $tanggal tidak ditemukan, tampilkan pesan bahwa tiket tidak tersedia
    echo "Tiket tidak tersedia untuk tanggal tersebut.";
}

echo "\n";  // Menambahkan baris baru untuk output


// Mendeklarasikan variabel $rating dengan nilai 3
// nilai rating yang akan digunakan untuk menentukan ulasan
$rating = 3;

// Menggunakan if-elseif-else untuk menentukan pesan ulasan berdasarkan nilai rating
if ($rating >= 4) {
    // Jika rating lebih besar atau sama dengan 4, tampilkan pesan "Ulasan sangat baik!"
    echo "Ulasan sangat baik!";
    //Menggunakan if, elseif, dan else untuk menentukan pesan berdasarkan nilai rating
} elseif ($rating >= 3) {
    // Jika rating lebih besar atau sama dengan 3, tampilkan pesan "Ulasan baik."
    echo "Ulasan baik.";
} elseif ($rating >= 2) {
    // Jika rating lebih besar atau sama dengan 2, tampilkan pesan "Ulasan cukup."
    echo "Ulasan cukup.";
} else {
    // Jika rating kurang dari 2, tampilkan pesan "Ulasan kurang."
    echo "Ulasan kurang.";
}

?>
