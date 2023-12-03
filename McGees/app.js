document.addEventListener("DOMContentLoaded", function() {
    var iconBtn = document.getElementById("dropdownBtn");
    var dropdownContent = document.getElementById("dropdownContent");

    function toggleDropdown() {
        dropdownContent.classList.toggle("show");
    }

    iconBtn.addEventListener("click", toggleDropdown);
});