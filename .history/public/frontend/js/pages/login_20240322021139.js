window.addEventListener("load", function () {
    const inputPassword = document.querySelector(".input-password");
    const toggle = document.querySelector(".toggle");
    inputPassword.addEventListener("input", function (e) {
        const value = e.target.value;
        console.log(value);
    });
});
