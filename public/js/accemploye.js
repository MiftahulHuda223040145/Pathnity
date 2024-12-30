const acceptButtons = document.querySelectorAll(".accept-button");
const rejectButtons = document.querySelectorAll(".reject-button");

acceptButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const employeeId = button.dataset.id;
        alert(`Karyawan dengan ID ${employeeId} yakin diinterview?`);
    });
});

rejectButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const employeeId = button.dataset.id;
        alert(`Karyawan dengan ID ${employeeId} ditolak.`);
    });
});
