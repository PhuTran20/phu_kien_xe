window.addEventListener("load", function () {
    const inputPassword = document.querySelector(".input-password");
    inputPassword.addEventListener("input", function (e) {
        console.log(e.target.value);
    });
});
