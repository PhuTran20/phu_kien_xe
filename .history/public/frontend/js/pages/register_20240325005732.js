window.addEventListener("load", function () {
    const inputUserName = document.querySelector(".username");
    inputUserName.addEventListener("click", activeCheck);
    function activeCheck(e) {
        console.log(e.target);
    }
});
