// Mendapatkan elemen select
const provinceSelect = document.getElementById("province-select");
const citySelect = document.getElementById("city-select");
const districtSelect = document.getElementById("district-select");
const addressField = document.getElementById("address"); // Field untuk menampilkan alamat

let provinceName = "";
let cityName = "";
let districtName = "";

// Fetch data provinsi dari backend
fetch("/api/locations/provinces")
    .then((response) => response.json())
    .then((data) => {
        console.log(data); // Debugging: Cek data yang diterima dari API

        // Mengisi dropdown provinsi
        if (data && Array.isArray(data)) {
            data.forEach((province) => {
                const option = document.createElement("option");
                option.value = province.id;
                option.textContent = province.name;
                provinceSelect.appendChild(option);
            });
        }
    })
    .catch((error) => {
        console.error("Error fetching provinces:", error);
    });

// Event listener untuk memilih provinsi
provinceSelect.addEventListener("change", function () {
    const selectedProvince = this.value;
    provinceName = this.options[this.selectedIndex].text;

    // Update hidden input dengan nama provinsi
    document.getElementById("hidden-province").value = provinceName;

    // Reset kota dan kecamatan
    citySelect.innerHTML = '<option value="">Select Regency</option>';
    districtSelect.innerHTML = '<option value="">Select District</option>';

    if (selectedProvince) {
        fetch(`/api/locations/cities?province_id=${selectedProvince}`)
            .then((response) => response.json())
            .then((cities) => {
                cities.forEach((city) => {
                    const option = document.createElement("option");
                    option.value = city.id;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                });
            });
    }
    updateAddress();
});

// Event listener untuk memilih kota
citySelect.addEventListener("change", function () {
    const selectedCity = this.value;
    cityName = this.options[this.selectedIndex].text;

    // Update hidden input dengan nama kota
    document.getElementById("hidden-city").value = cityName;

    // Reset kecamatan
    districtSelect.innerHTML = '<option value="">Select District</option>';
    if (selectedCity) {
        fetch(`/api/locations/districts?city_id=${selectedCity}`)
            .then((response) => response.json())
            .then((districts) => {
                districts.forEach((district) => {
                    const option = document.createElement("option");
                    option.value = district.id;
                    option.textContent = district.name;
                    districtSelect.appendChild(option);
                });
            });
    }
    updateAddress();
});

// Event listener untuk memilih kecamatan
districtSelect.addEventListener("change", function () {
    const selectedDistrict = this.value;
    districtName = this.options[this.selectedIndex].text;

    // Update hidden input dengan nama kecamatan
    document.getElementById("hidden-district").value = districtName;

    updateAddress();
});

// Fungsi untuk memperbarui alamat di field text
function updateAddress() {
    const fullAddress = [provinceName, cityName, districtName]
        .filter(Boolean)
        .join(", ");
    const addressField = document.getElementById("address");

    if (addressField) {
        addressField.value = fullAddress; // Tampilkan alamat lengkap di field
    }
}
