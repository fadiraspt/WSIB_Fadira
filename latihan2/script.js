// Smooth Scroll saat navigasi diklik
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        // Scroll ke elemen target dengan perilaku halus
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Highlight section yang aktif saat scroll
window.addEventListener('scroll', function() {
    let sections = document.querySelectorAll('.section');
    let navLinks = document.querySelectorAll('nav ul li a');

    sections.forEach(section => {
        let top = window.scrollY;
        let offset = section.offsetTop - 150; // Offset untuk menyesuaikan posisi
        let height = section.offsetHeight;
        let id = section.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active'); // Hapus kelas aktif dari semua link
            });
            // Tambahkan kelas aktif ke link yang sesuai
            document.querySelector('nav ul li a[href="#' + id + '"]').classList.add('active');
        }
    });
});

// Tombol Back to Top muncul saat scroll ke bawah
let backToTopBtn = document.getElementById('backToTop');

// Sembunyikan tombol secara default
backToTopBtn.style.display = 'none'; 

window.addEventListener('scroll', function() {
    if (window.scrollY > 300) {
        backToTopBtn.style.display = 'block'; // Tampilkan tombol
    } else {
        backToTopBtn.style.display = 'none'; // Sembunyikan tombol
    }
});

// Klik tombol Back to Top untuk scroll ke atas
backToTopBtn.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Scroll ke atas dengan efek halus
    });
});
