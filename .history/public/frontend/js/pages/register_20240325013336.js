window.addEventListener("load", function () {
    const check = document.querySelector(".check-list");
    const inputUserName = document.querySelector(".username");
    const inputPassWord = document.querySelector(".password");
    const 
 

    inputPassWord.addEventListener("input", function (e) {
        const value = e.target.value;
        if (value === "") {
            check.setAttribute("style", "display: none;");
        } else {
            inputPassWord.insertAdjacentHTML("beforeend", template);
        }
    });
});
