

function showTab(tabId) {
    // Sembunyikan semua konten tab
    document
        .querySelectorAll(".tab-content")
        .forEach((tab) => tab.classList.add("hidden"));

    // Hapus kelas aktif dari semua tombol tab
    document.querySelectorAll(".tab-button").forEach((button) => {
        button.classList.remove(
            "text-orange-500",
            "font-semibold",
            "hover:text-orange-600"
        );
    });

    // Tampilkan konten tab yang dipilih
    document.getElementById(tabId).classList.remove("hidden");

    // Tandai tombol tab yang aktif
    const activeButton = document.querySelector(`#${tabId}Tab`);
    activeButton.classList.add(
        "text-orange-500",
        "font-semibold",
        "hover:text-orange-600"
    );
}

function toggleForm(formId) {
    const form = document.getElementById(formId);
    form.classList.toggle("hidden");
}

function confirmDeleteAccount() {
    if (
        confirm(
            "Are you sure you want to delete your account? This action cannot be undone."
        )
    ) {
        alert("Account deleted.");
    }
}

function previewProfilePicture(event) {
    const input = event.target;
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("profilePreview").src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
