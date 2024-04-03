window.addEventListener("load", function () {
    const button = document.querySelector(".button-detail");
    const main = document.querySelector(".main-panel");
    button.addEventListener("click", function (e) {
        const temlate = `<div class="modal">
        <div class="modal-content"> 
            <i  class=" fa fa-times modal-close">
            </i>
            asdsad
        </div>
        </div>`;
        main.insertAdjacentHTML("beforeend", temlate);
    });
});
