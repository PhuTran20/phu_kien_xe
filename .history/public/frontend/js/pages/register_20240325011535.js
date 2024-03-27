window.addEventListener("load", function () {
    const check = document.querySelector(".check-list");
    const inputUserName = document.querySelector(".username");
    inputUserName.addEventListener("input", function (e) {
        const value = e.target.value;
        console.log(value);

        if (value == "") {
            check.setAttribute("style", "display:none");
        }else{
            check.setAttribute("style", "display:none");
            
        }
    });
});
