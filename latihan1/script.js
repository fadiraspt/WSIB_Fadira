// Ambil elemen-elemen dari form 
const loginForm = document.getElementById('loginform'); // Pastikan ID ini sama dengan HTML
const usernameInput = document.getElementById('username'); 
const passwordInput = document.getElementById('password'); 
const errorMessage = document.getElementById('error-message'); 

// Tambahkan event listener ketika form disubmit 
loginForm.addEventListener('submit', function (event) { 
    event.preventDefault(); // Mencegah form dari pengiriman default

    const username = usernameInput.value.trim(); 
    const password = passwordInput.value.trim(); 

    if (username === '') { 
        errorMessage.textContent = 'Username tidak boleh kosong!'; 
        errorMessage.style.color = 'red'; 
    } else if (password === '') { 
        errorMessage.textContent = 'Password tidak boleh kosong!'; 
        errorMessage.style.color = 'red'; 
    } else if (password.length < 6) { 
        errorMessage.textContent = 'Password harus minimal 6 karakter!'; 
        errorMessage.style.color = 'red'; 
    } else { 
        errorMessage.textContent = ''; // Hapus pesan kesalahan
        alert('Login berhasil'); // Notifikasi berhasil
    } 
});
