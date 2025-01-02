function togglePasswordVisibility(inputId, iconElement) {
    const inputField = document.getElementById(inputId);
    const icon = iconElement.querySelector("img");

    if (inputField.type === "password") {
        inputField.type = "text";
        icon.src = "/img/password/eye.png";
        icon.alt = "show Password";
    } else {
        inputField.type = "password";
        icon.src = "/img/password/hidden.png";
        icon.alt = "hidden Password";
    }
}
