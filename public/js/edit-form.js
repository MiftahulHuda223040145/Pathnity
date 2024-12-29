// resources/js/edit-form.js

function openEditForm(section) {
    const modal = document.getElementById("editFormModal");
    const title = document.getElementById("editFormTitle");
    const form = document.getElementById("editForm");

    title.textContent = `Edit ${
        section.charAt(0).toUpperCase() + section.slice(1)
    }`;

    if (section === "skills") {
        form.innerHTML = `
            <label class="block mb-2">Skills</label>
            <div id="skillsList" class="space-y-2">
                <input type="text" class="w-full border px-4 py-2 rounded mb-4" placeholder="Enter a skill">
            </div>
            <button type="button" id="addSkillBtn" class="bg-gray-200 px-3 py-1 rounded">+ Add Skill</button>
        `;

        // Add functionality to dynamically add more skill inputs
        const addSkillBtn = document.getElementById("addSkillBtn");
        const skillsList = document.getElementById("skillsList");
        addSkillBtn.addEventListener("click", () => {
            const skillInput = document.createElement("input");
            skillInput.type = "text";
            skillInput.placeholder = "Enter a skill";
            skillInput.className = "w-full border px-4 py-2 rounded mb-4";
            skillsList.appendChild(skillInput);
        });
    } else if (section === "education") {
        form.innerHTML = `
            <label class="block mb-2">Institution</label>
            <input type="text" class="w-full border px-4 py-2 rounded mb-4" placeholder="Enter institution">
            <label class="block mb-2">Degree</label>
            <input type="text" class="w-full border px-4 py-2 rounded mb-4" placeholder="Enter degree">
            <label class="block mb-2">Year</label>
            <input type="text" class="w-full border px-4 py-2 rounded mb-4" placeholder="Enter year">
        `;
    }

    modal.classList.remove("hidden");
}

function closeEditForm() {
    const modal = document.getElementById("editFormModal");
    modal.classList.add("hidden");
}

// Export functions
window.openEditForm = openEditForm;
window.closeEditForm = closeEditForm;
