document.addEventListener("DOMContentLoaded", () => {
    const editForm = document.getElementById("editForm");

    if (editForm) {
        editForm.addEventListener("submit", (event) => {
            event.preventDefault();
            localStorage.setItem("userName", document.getElementById("userName").value);
            localStorage.setItem("birthday", document.getElementById("birthday").value);
            localStorage.setItem("gender", document.getElementById("gender").value);
            localStorage.setItem("country", document.getElementById("country").value);
            localStorage.setItem("city", document.getElementById("city").value);

            alert("Data has been updated!");
            window.location.href = "/setting"; 
        });
    }

    // Untuk halaman awal, isi data dari localStorage
    const userName = localStorage.getItem("userName") || "Pa Sugeng";
    const birthday = localStorage.getItem("birthday") || "2004-12-12";
    const gender = localStorage.getItem("gender") || "Male";
    const country = localStorage.getItem("country") || "Indonesia";
    const city = localStorage.getItem("city") || "Bandung";

    document.querySelectorAll(".data-name")?.forEach(el => el.textContent = userName);
    document.querySelectorAll(".data-birthday")?.forEach(el => el.textContent = birthday);
    document.querySelectorAll(".data-gender")?.forEach(el => el.textContent = gender);
    document.querySelectorAll(".data-country")?.forEach(el => el.textContent = country);
    document.querySelectorAll(".data-city")?.forEach(el => el.textContent = city);

    // Menampilkan tab profil secara default
    showTab('profile');
});

function showTab(tabId) {
    // Sembunyikan semua konten tab
    document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));

    // Hapus kelas aktif dari semua tombol tab
    document.querySelectorAll('.tab-button').forEach(button => {
        button.classList.remove('text-orange-500', 'font-semibold', 'hover:text-orange-600');
    });

    // Tampilkan konten tab yang dipilih
    document.getElementById(tabId).classList.remove('hidden');

    // Tandai tombol tab yang aktif
    const activeButton = document.querySelector(`#${tabId}Tab`);
    activeButton.classList.add('text-orange-500', 'font-semibold', 'hover:text-orange-600');
}

function toggleForm(formId) {
    const form = document.getElementById(formId);
    form.classList.toggle('hidden');
}

function confirmDeleteAccount() {
    if (confirm("Are you sure you want to delete your account? This action cannot be undone.")) {
        alert("Account deleted.");
    }
}
