window.addEventListener("load", function () {
    const button = document.querySelector(".button-detail");
    const main = document.querySelector
    button.addEventListener("click", function (e) {
        const temlate = `<div class="modal">
        <div class="modal-content"> 
            <i  class=" fa fa-times modal-close">
            </i>
        </div>
        </div>`;
        document.body.insertAdjacentHTML("beforeend", temlate);
    });
});
