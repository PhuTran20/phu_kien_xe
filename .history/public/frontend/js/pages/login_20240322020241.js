window.addEventListener("load", function () {
    const inputPassword = document.querySelector(".input-password");
    inputPassword.addEventListener("in", function (e) {
        console.log(e.target);
    });
});
