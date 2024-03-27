window.addEventListener("load", function () {
    const check = document.querySelector(".check-list");
    const inputUserName = document.querySelector(".username");
    const inputPassWord = document.querySelector(".password");

    inputPassWord.addEventListener("input", function (e) {
        const value = e.target.value;
        const template = `<div class="check-list">
        <div class="check-item check-length" data-validation="length">
            <i class="fa fa-circle"></i> At least 8 characters
        </div>
        <div class="check-item check-upper">
            <i class="fa fa-circle"></i> Contains at least 1 uppercase
        </div>
        <div class="check-item check-number">
            <i class="fa fa-circle"></i> Contains at least 1 number
        </div>
        <div class="check-item check-special">
            <i class="fa fa-circle"></i> Contains at least 1 special character
        </div>
    </div>`;
        const checkList = document.querySelector(".check-list");
        if (value === "") {
            if (checkList) {
                checkList.remove();
            }
            return;
        } else {
            const existingCheckList = document.querySelector(".check-list");
            if (existingCheckList) {
                existingCheckList.remove();
            }
            e.target.insertAdjacentHTML("afterend", template);
        }
    });
});
