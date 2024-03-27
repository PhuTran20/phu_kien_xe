window.addEventListener("load", function () {
    const inputUserName = document.querySelector(".username");
    const inputPassWord = document.querySelector(".password");
    inputUserName.addEventListener("input", function (e) {
        const value = e.target.value;
        console.log(value);
        const template = `<div class="check-list">
        <div class="check-item check-length" data-validation="length">
            <i class="fa fa-circle"></i> At least 4 characters
        </div>
    </div>`;
        const checkList = document.querySelector(".check-List");
        if (value === "") {
            if (checkList) {
                checkList.remove();
            }
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
                e.target.setAttribute(
                    "style",
                    " box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"
                );
            }
        }
    });

    // const input = document.querySelectorAll(".input");
    // input.forEach((item) => item.addEventListener("input", activeCheck));
    // function activeCheck(e) {
    //     const value = e.target.value;
    //     const template = `<div class="check-list">
    //         <div class="check-item check-length" data-validation="length">
    //             <i class="fa fa-circle"></i> At least 8 characters
    //         </div>
    //         <div class="check-item check-upper">
    //             <i class="fa fa-circle"></i> Contains at least 1 uppercase
    //         </div>
    //         <div class="check-item check-number">
    //             <i class="fa fa-circle"></i> Contains at least 1 number
    //         </div>
    //         <div class="check-item check-special">
    //             <i class="fa fa-circle"></i> Contains at least 1 special character
    //         </div>
    //     </div>`;
    //     const checkList = document.querySelector(".check-list");
    //     if (value === "") {
    //         if (checkList) {
    //             checkList.remove();
    //         }
    //         return;
    //     } else {
    //         const existingCheckList = document.querySelector(".check-list");
    //         if (existingCheckList) {
    //             existingCheckList.remove();
    //         }
    //         e.target.insertAdjacentHTML("afterend", template);
    //     }
    // }
});
