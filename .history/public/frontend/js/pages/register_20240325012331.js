window.addEventListener("load", function () {
    const check = document.querySelector(".check-list");
    const inputUserName = document.querySelector(".username");
    const inputPassWord = document.querySelector(".password");
    inputUserName.addEventListener("input", function (e) {
        const value = e.target.value;
        const checkLength = document.querySelector(".check-length");
        if (value === "") {
            check.setAttribute("style", "display: none;");
        } else {
            check.setAttribute("style", "display: block;");
        }
    });
    inputPassWord.addEventListener("")
});
