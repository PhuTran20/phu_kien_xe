window.addEventListener("load", function () {
    const inputUserName = document.querySelector(".username");
    inputUserName.addEventListener("input", function(e){
        e.target.classList.add("check-list")
    });
  
});
