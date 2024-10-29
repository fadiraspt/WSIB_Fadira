<?php
// Mendefinisikan fungsi bernama bilanganTerbesar yang membandingkan dua angka.
// Fungsi ini menerima dua parameter: $angka1 dan $angka2.
function bilanganTerbesar($angka1, $angka2) 
{
    // Memeriksa apakah kedua angka sama?
    if ($angka1 == $angka2){
        // Jika kedua angka sama, tampilkan pesan bahwa nilainya sama.
        echo "Bilangan 1 dengan bilangan 2 memiliki nilai yang sama";
    // Memeriksa apakah $angka1 lebih besar dari $angka2?
    } elseif ($angka1 > $angka2) {
        // Jika $angka1 lebih besar, tampilkan $angka1 sebagai bilangan terbesar.
        echo "Bilangan terbesar adalah : $angka1";
    } else {
        // Jika $angka2 lebih besar dari $angka1, tampilkan $angka2 sebagai bilangan terbesar.
        echo "Bilangan terbesar adalah : $angka2";
    }
}

// Memanggil fungsi bilanganTerbesar dengan argumen 13 dan 10.
// Fungsi ini akan membandingkan 13 dan 10 dan menampilkan hasilnya.
bilanganTerbesar(13,10);
?>
