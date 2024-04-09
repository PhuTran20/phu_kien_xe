

window.addEventListener("load", function () {
    const dropdown = document.querySelector(".dropdown");
    const dropdownList = document.querySelector(".dropdown_list");
    const dropdown_selected
    dropdown.addEventListener("click", function () {
        dropdownList.classList.toggle("show");
        
    });
});
