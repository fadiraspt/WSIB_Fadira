<?php
// 1. Kita mulai dengan mendeklarasikan atau menjabarkan sebuah *interface* bernama *Bird*.
//    Interface ini seperti cetakan yang hanya memberi tahu bahwa semua burung harus bisa membuat suara.
interface Bird {
    // 2. Dalam interface ini, kita membuat metode *makeSound()*.
    //    Namun, kita tidak memberi tahu bagaimana cara burung itu membuat suara.
    public function makeSound(); 
}

// 3. Selanjutnya, kita membuat kelas *Perkutut* yang mengimplementasikan interface **Bird**.
//    Ini berarti kelas Perkutut harus memiliki metode **makeSound()**.
class Perkutut implements Bird { 
    // 4. Di sini, kita mengimplementasikan metode **makeSound()** dari interface Bird.
    public function makeSound() {
        echo "Kur Kur"; // Jika kita memanggil metode MakeSound ini, akan mencetak "kur kur".
    }
}

// 5. membuat objek baru dari kelas **Perkutut**.
$burung = new Perkutut(); // Membuat burung perkutut.

// 6. Terakhir, kita memanggil metode **makeSound()** pada objek **burung**.
$burung->makeSound(); // Ini akan menjalankan metode dan mencetak "kur kur".
?>
