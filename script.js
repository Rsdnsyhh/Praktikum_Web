// Function seperti pada modul, untuk mengorganisir kode
function handleCardClick(event) {
    // Event Handling: Mendapatkan elemen yang diklik
    const card = event.currentTarget;
    const cardTitle = card.querySelector(".card-title").textContent;

    // 1. DOM Manipulation: Mengubah style elemen (menambahkan border sementara)
    // Menggunakan custom properties yang didefinisikan di CSS
    card.style.border = "3px solid #e74c3c"; // Menggunakan warna tersier dari CSS
    card.style.boxShadow = "0 0 15px rgba(231, 76, 60, 0.8)";
    card.style.transform = "scale(1.03)";

    // 2. Event Handling: Menampilkan alert
    alert("Anda memilih: " + cardTitle + ". Silakan hubungi kontak untuk pemesanan!");

    // Mengembalikan style asli setelah alert ditutup
    setTimeout(() => {
        card.style.border = "none";
        // Menggunakan ternary operator untuk mempertahankan shadow saat dark mode
        card.style.boxShadow = document.body.classList.contains('dark-mode') ? "0 4px 8px rgba(0, 0, 0, 0.4)" : "0 4px 8px rgba(0, 0, 0, 0.1)";
        card.style.transform = "translateY(0)";
    }, 500);
}

// Function untuk mengelola Dark Mode
function toggleDarkMode() {
    // DOM Manipulation: Menambahkan/menghapus class 'dark-mode' pada body
    document.body.classList.toggle('dark-mode');
    
    // DOM Manipulation: Mengubah teks tombol berdasarkan status dark mode
    const isDarkMode = document.body.classList.contains('dark-mode');
    const toggleButton = document.getElementById("darkModeToggle");
    toggleButton.textContent = isDarkMode ? "Light Mode" : "Dark Mode";
    
    // Menyimpan preferensi ke Local Storage
    localStorage.setItem('darkMode', isDarkMode);
}


// Menangani Event Load Halaman
// Event 'load' terjadi ketika halaman selesai di-load
window.addEventListener("load", function() {
    // 3. DOM Manipulation: Mengubah teks/konten
    const statusElement = document.getElementById("contact-status");
    if (statusElement) {
        statusElement.textContent = "Hubungi kami! Kami siap melayani.";
        // DOM Manipulation: Mengubah style elemen
        statusElement.style.fontWeight = "bold";
        statusElement.style.color = "#3498db"; // Menggunakan warna sekunder dari CSS
    }
    console.log("Halaman telah selesai diload.");
    
    // Mengecek Local Storage saat halaman dimuat untuk menerapkan preferensi Dark Mode
    const savedDarkMode = localStorage.getItem('darkMode');
    const toggleButton = document.getElementById("darkModeToggle");

    if (savedDarkMode === 'true') {
        document.body.classList.add('dark-mode');
        if (toggleButton) {
            toggleButton.textContent = "Light Mode";
        }
    } else {
        // Mode default (Light Mode)
        if (toggleButton) {
            toggleButton.textContent = "Dark Mode";
        }
    }
});

// Menangani Event setelah DOM Content Loaded (lebih cepat dari window.load)
document.addEventListener("DOMContentLoaded", function() {
    
    // 4. DOM Manipulation: Mengubah teks pada elemen tagline
    const taglineElement = document.querySelector(".tagline");
    if (taglineElement) {
        taglineElement.textContent = "Solusi mudah untuk menyewa perlengkapan outdoor dan camping. Mulai petualanganmu sekarang!";
    }

    // Dapatkan semua elemen layanan
    const serviceCards = document.querySelectorAll(".service-card");

    // Iterasi setiap kartu layanan untuk menambahkan Event Listener
    serviceCards.forEach(card => {
        // Menambahkan Event Listener untuk event 'click'
        card.addEventListener("click", handleCardClick);
    });

    // 5. DOM Manipulation: Menambah elemen baru ke halaman
    const newParagraph = document.createElement("p");
    newParagraph.textContent = "Klik pada layanan di atas untuk info pemesanan!";
    newParagraph.style.textAlign = "center";
    newParagraph.style.marginTop = "20px";
    
    const servicesSection = document.getElementById("services");
    // Gunakan appendChild untuk menambah elemen baru
    if (servicesSection) {
        servicesSection.querySelector(".container").appendChild(newParagraph);
    }
    
    // Menambahkan Event Listener untuk Dark Mode
    const darkModeToggle = document.getElementById("darkModeToggle");
    if (darkModeToggle) {
        darkModeToggle.addEventListener("click", toggleDarkMode);
    }
});