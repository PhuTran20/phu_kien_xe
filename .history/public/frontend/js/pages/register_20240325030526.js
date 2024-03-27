window.addEventListener("load", function () {
    const inputUserName = document.querySelector(".username");
    const inputAccount = document.querySelector(".account");
    const inputPassWord = document.querySelector(".password");
    const inputRePassWord = document.querySelector(".re-password");
    const inputPhone = document.querySelector(".phone");
    inputUserName.addEventListener("input", function (e) {
        const value = e.target.value;
        console.log(value);
        const template = `<div class="check-list">
        <div class="check-item check-length" data-validation="length">
            <i class="fa fa-circle"></i> At least 4 characters
        </div>
    </div>`;
        const checkList = document.querySelector(".check-List");

        if (value.trim() === "") {
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
            const checkLength = document.querySelector(".check-length");
            if (value.length < 4) {
                checkLength.classList.add("unactive");
                e.target.setAttribute("style", "border: solid 1px #f00;");
            } else {
                checkLength.classList.add("active");
                e.target.setAttribute("style", "border: solid 1px #20e3b2;");
            }
        }
    });
    inputAccount.addEventListener("input", function (e) {
        const value = e.target.value;
        console.log(value);
        const template = `<div class="check-list">
        <div class="check-item check-length" data-validation="length">
            <i class="fa fa-circle"></i> At least 8 characters
        </div>
    </div>`;
        const checkList = document.querySelector(".check-List");

        if (value.trim() === "") {
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
            const checkLength = document.querySelector(".check-length");
            if (value.length < 8) {
                checkLength.classList.add("unactive");
                e.target.setAttribute("style", "border: solid 1px #f00;");
            } else {
                checkLength.classList.add("active");
                e.target.setAttribute("style", "border: solid 1px #20e3b2;");
            }
        }
    });
    inputPassWord.addEventListener("input", function (e) {
        const value = e.target.value;
        console.log(value);
        const template = `<div class="check-list">
        <div class="check-item check-length" data-validation="length">
            <i class="fa fa-circle"></i> At least 8 characters
        </div>
    </div>`;
        const checkList = document.querySelector(".check-List");

        if (value.trim() === "") {
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
            const checkLength = document.querySelector(".check-length");
            if (value.length < 8) {
                checkLength.classList.add("unactive");
                e.target.setAttribute("style", "border: solid 1px #f00;");
            } else {
                checkLength.classList.add("active");
                e.target.setAttribute("style", "border: solid 1px #20e3b2;");
            }
        }
    });
    inputRePassWord.addEventListener("input", function (e) {
        const value = e.target.value;
        console.log(value);
        const template = `<div class="check-list">
        <div class="check-item check-length" data-validation="length">
            <i class="fa fa-circle"></i> At least 8 characters
        </div>
    </div>`;
        const checkList = document.querySelector(".check-List");

        if (value.trim() === "") {
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
            const checkLength = document.querySelector(".check-length");
            if (value.length < 8) {
                checkLength.classList.add("unactive");
                e.target.setAttribute("style", "border: solid 1px #f00;");
            } else {
                checkLength.classList.add("active");
                e.target.setAttribute("style", "border: solid 1px #20e3b2;");
            }
        }
    });
    inputAccount.addEventListener("input", function (e) {
        const value = e.target.value;
        console.log(value);
        const template = `<div class="check-list">
        <div class="check-item check-length" data-validation="length">
            <i class="fa fa-circle"></i> At least 8 characters
        </div>
    </div>`;
        const checkList = document.querySelector(".check-List");

        if (value.trim() === "") {
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
            const checkLength = document.querySelector(".check-length");
            if (value.length < 8) {
                checkLength.classList.add("unactive");
                e.target.setAttribute("style", "border: solid 1px #f00;");
            } else {
                checkLength.classList.add("active");
                e.target.setAttribute("style", "border: solid 1px #20e3b2;");
            }
        }
    });

     
});
