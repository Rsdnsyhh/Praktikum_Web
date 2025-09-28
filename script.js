[cite_start]// Function seperti pada modul, untuk mengorganisir kode
function handleCardClick(event) {
    [cite_start]// Event Handling: Mendapatkan elemen yang diklik
    const card = event.currentTarget;
    const cardTitle = card.querySelector(".card-title").textContent;

    [cite_start]// 1. DOM Manipulation: Mengubah style elemen (menambahkan border sementara)
    // Menggunakan custom properties yang didefinisikan di CSS
    card.style.border = "3px solid #e74c3c"; // Menggunakan warna tersier dari CSS
    card.style.boxShadow = "0 0 15px rgba(231, 76, 60, 0.8)";
    card.style.transform = "scale(1.03)";

    [cite_start]// 2. Event Handling: Menampilkan alert
    alert("Anda memilih: " + cardTitle + ". Silakan hubungi kontak untuk pemesanan!");

    // Mengembalikan style asli setelah alert ditutup
    setTimeout(() => {
        card.style.border = "none";
        card.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.1)";
        card.style.transform = "translateY(0)";
    }, 500);
}

// Menangani Event Load Halaman
[cite_start]// Event 'load' terjadi ketika halaman selesai di-load
window.addEventListener("load", function() {
    [cite_start]// 3. DOM Manipulation: Mengubah teks/konten
    const statusElement = document.getElementById("contact-status");
    if (statusElement) {
        statusElement.textContent = "Hubungi kami! Kami siap melayani.";
        [cite_start]// DOM Manipulation: Mengubah style elemen
        statusElement.style.fontWeight = "bold";
        statusElement.style.color = "#3498db"; // Menggunakan warna sekunder dari CSS
    }
    console.log("Halaman telah selesai diload.");
});

// Menangani Event setelah DOM Content Loaded (lebih cepat dari window.load)
document.addEventListener("DOMContentLoaded", function() {
    
    [cite_start]// 4. DOM Manipulation: Mengubah teks pada elemen tagline
    const taglineElement = document.querySelector(".tagline");
    if (taglineElement) {
        taglineElement.textContent = "Solusi mudah untuk menyewa perlengkapan outdoor dan camping. Mulai petualanganmu sekarang!";
    }

    [cite_start]// Dapatkan semua elemen layanan
    const serviceCards = document.querySelectorAll(".service-card");

    // Iterasi setiap kartu layanan untuk menambahkan Event Listener
    serviceCards.forEach(card => {
        [cite_start]// Menambahkan Event Listener untuk event 'click'
        card.addEventListener("click", handleCardClick);
    });

    [cite_start]// 5. DOM Manipulation: Menambah elemen baru ke halaman
    const newParagraph = document.createElement("p");
    newParagraph.textContent = "Klik pada layanan di atas untuk info pemesanan!";
    newParagraph.style.textAlign = "center";
    newParagraph.style.marginTop = "20px";
    
    const servicesSection = document.getElementById("services");
    [cite_start]// Gunakan appendChild untuk menambah elemen baru
    if (servicesSection) {
        servicesSection.querySelector(".container").appendChild(newParagraph);
    }
});