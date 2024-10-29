<?php

// 1. Kita membuat kelas yang disebut "Person". 
//    - Kelas ini adalah kelas khusus yang tidak bisa kita buat langsung, 
//      tetapi kita akan membuat kelas lain yang akan mengikuti aturan dari kelas ini.
abstract class Person {
    // 2. Kelas ini harus memiliki metode (fungsi) yang disebut "greet".
    //    - Tapi tidak memberi tahu bagaimana cara kerjanya di sini.
    abstract public function greet();
}

// 3. Sekarang kita buat kelas "English" yang mengikuti aturan dari kelas "Person".
class English extends Person
{
    // 4. lalu memberi tahu bagaimana "greet" harus bekerja untuk "English".
    public function greet()
    {
        return "Hallo ini English"; // Ini adalah sapaan dalam bahasa Inggris
    }
}

// 5. Kita buat kelas "German" yang juga mengikuti aturan dari "Person".
class German extends Person
{
    // 6. Ini adalah implementasi "greet" untuk "German".
    public function greet()
    {
        return "Hallo ini German"; // Ini adalah sapaan dalam bahasa Jerman
    }
}

// 7. Kita buat kelas "French" yang mengikuti aturan dari "Person".
class French extends Person
{
    // 8. Ini adalah implementasi "greet" untuk "French".
    public function greet()
    {
        return "Hallo ini French"; // Ini adalah sapaan dalam bahasa Prancis
    }
}

// 9. Kita buat fungsi bernama "showGreeting" yang menerima objek dari kelas "Person".
//    - Fungsi ini akan mencetak sapaan yang dihasilkan oleh objek tersebut.
function showGreeting(Person $person)
{
    echo $person->greet() . PHP_EOL; // Memanggil "greet" dan mencetak hasilnya ke layar
}

// 10. Kita buat objek baru untuk setiap kelas yang telah kita buat.
//     - Ini langkah pertama dalam menggunakan kelas yang telah kita buat.
$english = new English(); // Membuat objek untuk kelas English
$german = new German();   // Membuat objek untuk kelas German
$french = new French();   // Membuat objek untuk kelas French

// 11. Kita panggil fungsi "showGreeting" untuk setiap objek yang kita buat.
//     - Ini langkah kedua, kita ingin menampilkan sapaan untuk setiap bahasa.
showGreeting($english); // Menampilkan sapaan dalam bahasa Inggris
showGreeting($german);  // Menampilkan sapaan dalam bahasa Jerman
showGreeting($french);  // Menampilkan sapaan dalam bahasa Prancis

?>
