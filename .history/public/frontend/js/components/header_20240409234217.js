window.addEventListener("load", function () {
    const dropdown = document.querySelector(".dropdown");
    const dropdownList = document.querySelector(".dropdown_list");
    const dropdownSelect = document.querySelector(".dropdown_select");
    dropdown.addEventListener("click", function () {
        dropdownList.classList.toggle("show");
    });
    document.addEventListener("click", function (e) {
        
        if (!dropdown.contains(e.target)) {
            dropdownList.classList.remove("show");
        }
    });
});
