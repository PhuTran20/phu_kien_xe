window.addEventListener("load", function () {
    const check = document.querySelector(".check-list");
    const inputUserName = document.querySelector(".username");
    const inputPassWord = document.querySelector(".password");
    const clickInput = document.querySelector(".input");
    clickInput.addEventListener("click",function(e){
        
    })

    inputPassWord.addEventListener("input", function (e) {
        const value = e.target.value;
        if (value === "") {
            check.setAttribute("style", "display: none;");
        } else {
            inputPassWord.insertAdjacentHTML("beforeend", template);
        }
    });
});
