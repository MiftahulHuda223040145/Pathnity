
// Contoh sederhana - Ganti dengan AJAX call ke backend Anda
const acceptButtons = document.querySelectorAll('.accept-button');
const rejectButtons = document.querySelectorAll('.reject-button');

acceptButtons.forEach(button => {
    button.addEventListener('click', () => {
        const employeeId = button.dataset.id;
        alert(`Karyawan dengan ID ${employeeId} diterima.  (Ini simulasi, ganti dengan AJAX call ke backend)`);
    });
});

rejectButtons.forEach(button => {
    button.addEventListener('click', () => {
        const employeeId = button.dataset.id;
        alert(`Karyawan dengan ID ${employeeId} ditolak. (Ini simulasi, ganti dengan AJAX call ke backend)`);
    });
});
