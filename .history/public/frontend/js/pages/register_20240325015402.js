window.addEventListener("load", function () {
    const check = document.querySelector(".check-list");
    const inputUserName = document.querySelector(".username");
    const inputPassWord = document.querySelector(".password");
    const input = document.querySelectorAll(".input");
    input.forEach((item) => item.addEventListener("input", activeCheck));
    function activeCheck(e) {}
    // input.addEventListener("input", function (e) {
    //     
    // });
});
