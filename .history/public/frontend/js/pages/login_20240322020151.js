window.addEventListener("load", function () {
    const inputPassword = document.querySelector(".input-password");
    inputPassword.addEventListener("c", function (e) {
        console.log(e.target);
    });
});
