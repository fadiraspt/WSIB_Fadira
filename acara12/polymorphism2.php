<?php

// 1. Kita mendeklarasikan interface yang disebut "Wearable".
//    - Ini adalah kontrak yang harus dipenuhi oleh semua kelas yang mengimplementasikannya.
interface Wearable
{
    public function wear(); // Metode yang harus ada dalam kelas yang menggunakan interface ini.
}

// 2. Kita membuat kelas abstrak yang disebut "Clothing".
//    - Kelas ini tidak bisa dibuat objeknya langsung, tetapi bisa digunakan sebagai dasar untuk kelas lain.
abstract class Clothing
{
    protected $size;  // Menyimpan ukuran pakaian
    protected $color; // Menyimpan warna pakaian

    // 3. Konstruktor untuk mengatur ukuran dan warna pakaian saat objek dibuat.
    public function __construct($size, $color)
    {
        $this->size = $size; // Mengatur ukuran
        $this->color = $color; // Mengatur warna
    }

    // 4. Metode abstrak yang harus diimplementasikan oleh kelas turunan.
    abstract public function describe();
}

// 5. Kita buat kelas "Shirt" yang mewarisi dari "Clothing" dan mengimplementasikan interface "Wearable".
class Shirt extends Clothing implements Wearable
{
    private $sleeveLength; // Menyimpan panjang lengan kemeja

    // 6. Konstruktor untuk mengatur ukuran, warna, dan panjang lengan.
    public function __construct($size, $color, $sleeveLength)
    {
        parent::__construct($size, $color); // Memanggil konstruktor dari kelas induk
        $this->sleeveLength = $sleeveLength; // Mengatur panjang lengan
    }

    // 7. Implementasi dari metode "describe" untuk memberikan deskripsi kemeja.
    public function describe()
    {
        return "Kemeja: Ukuran {$this->size}, Warna {$this->color}, Panjang Lengan {$this->sleeveLength}.";
    }

    // 8. Implementasi dari metode "wear" untuk mengenakan kemeja.
    public function wear()
    {
        return "Mengenakan Kemeja.";
    }
}

// 9. Kita buat kelas "Pants" yang juga mewarisi dari "Clothing" dan mengimplementasikan interface "Wearable".
class Pants extends Clothing implements Wearable
{
    private $waistSize; // Menyimpan ukuran pinggang celana

    // 10. Konstruktor untuk mengatur ukuran, warna, dan ukuran pinggang.
    public function __construct($size, $color, $waistSize)
    {
        parent::__construct($size, $color); // Memanggil konstruktor dari kelas induk
        $this->waistSize = $waistSize; // Mengatur ukuran pinggang
    }

    // 11. Implementasi dari metode "describe" untuk memberikan deskripsi celana.
    public function describe()
    {
        return "Celana: Ukuran {$this->size}, Warna {$this->color}, Ukuran Pinggang {$this->waistSize}.";
    }

    // 12. Implementasi dari metode "wear" untuk mengenakan celana.
    public function wear()
    {
        return "Mengenakan Celana.";
    }
}

// 13. Kita buat kelas "Jacket" yang juga mewarisi dari "Clothing" dan mengimplementasikan interface "Wearable".
class Jacket extends Clothing implements Wearable
{
    private $type; // Menyimpan tipe jaket

    // 14. Konstruktor untuk mengatur ukuran, warna, dan tipe jaket.
    public function __construct($size, $color, $type)
    {
        parent::__construct($size, $color); // Memanggil konstruktor dari kelas induk
        $this->type = $type; // Mengatur tipe jaket
    }

    // 15. Implementasi dari metode "describe" untuk memberikan deskripsi jaket.
    public function describe()
    {
        return "Jaket: Ukuran {$this->size}, Warna {$this->color}, Tipe {$this->type}.";
    }

    // 16. Implementasi dari metode "wear" untuk mengenakan jaket.
    public function wear() {
        return "Mengenakan Jaket.";
    }
}

// 17. Fungsi untuk menampilkan deskripsi pakaian.
function showClothingDescription(Clothing $clothing)
{
    echo $clothing->describe() . "\n"; // Memanggil metode describe dan mencetak hasilnya
}

// 18. Fungsi untuk mengenakan pakaian.
function tryOnWearable(Wearable $wearable)
{
    echo $wearable->wear() . "\n"; // Memanggil metode wear dan mencetak hasil method
}

// 19. Membuat objek baru untuk setiap jenis pakaian.
$shirt = new Shirt("M", "Biru", "Panjang"); // Membuat objek untuk kemeja
$pants = new Pants("32", "Hitam", "30"); // Membuat objek untuk celana
$jacket = new Jacket("L", "Merah Maron", "Jaket Kulit"); // Membuat objek untuk jaket

// 20. Menampilkan deskripsi untuk setiap jenis pakaian.
showClothingDescription($shirt); // Menampilkan deskripsi kemeja
showClothingDescription($pants); // Menampilkan deskripsi celana
showClothingDescription($jacket); // Menampilkan deskripsi jaket

// 21. Mengenakan setiap jenis pakaian.
tryOnWearable($shirt); // Mengenakan kemeja
tryOnWearable($pants); // Mengenakan celana
tryOnWearable($jacket); // Mengenakan jaket
?>
