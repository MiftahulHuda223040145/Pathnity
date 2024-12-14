document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navbar");

    if (window.location.pathname === "/") {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                navbar.classList.remove("bg-transparent");
                navbar.classList.add("bg-[#241365]", "shadow-lg");
            } else {
                navbar.classList.remove("bg-[#241365]", "shadow-lg");
                navbar.classList.add("bg-transparent");
            }
        });
    } else {
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-[#241365]", "shadow-lg");
    }
});
