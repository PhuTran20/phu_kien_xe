window.addEventListener("load", function () {
    const inputPassword = document.querySelector(".input-password");
    inputPassword.addEventListener("input", function (e) {
        const value = e.target.value;
        console.log(value);
    });
});
