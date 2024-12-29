// JavaScript code for handling the modal popup for file upload

// Show modal when a file is selected
function showModal() {
    const fileInput = document.getElementById("background-upload");
    const fileName = fileInput.files[0] ? fileInput.files[0].name : "";
    document.getElementById("file-name-modal").textContent = fileName;
    document.getElementById("uploadModal").classList.remove("hidden");
}

// Close modal without uploading
document.getElementById("cancel-upload").addEventListener("click", function () {
    document.getElementById("uploadModal").classList.add("hidden");
    document.getElementById("background-upload").value = ""; // Reset the input
});

// Confirm upload and close modal
document
    .getElementById("confirm-upload")
    .addEventListener("click", function () {
        alert("Background uploaded successfully!");
        document.getElementById("uploadModal").classList.add("hidden");
    });

// Attach showModal function to the file input onchange event
document
    .getElementById("background-upload")
    .addEventListener("change", showModal);
