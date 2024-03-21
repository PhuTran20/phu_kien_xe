window.addEventListener("load", function () {
    const inputPassword = document.querySelector(".input-password");
    inputPassword.addEventListener("cli", function (e) {
        console.log(e.target);
    });
});
