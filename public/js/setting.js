document.addEventListener("DOMContentLoaded", () => {
    const editForm = document.getElementById("editForm");

    if (editForm) {
        editForm.addEventListener("submit", (event) => {
            event.preventDefault();
            localStorage.setItem("userName", document.querySelector('input[type="text"]').value);
            localStorage.setItem("birthday", document.querySelector('input[type="date"]').value);
            localStorage.setItem("gender", document.querySelector('select').value);
            localStorage.setItem("country", document.querySelector('input[type="text"]').value);
            localStorage.setItem("city", document.querySelectorAll('input[type="text"]')[1].value);

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
});
