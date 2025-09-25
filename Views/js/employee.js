let requestForm = document.getElementById("requestFrom");
let userInfo = document.getElementById("userinfo");
let mainContent = document.getElementById("mainContent");
let rqBtn = document.getElementById("rqLeave");
let profileBtn = document.getElementById("profile");

rqBtn.addEventListener("click", function () {  
    mainContent.style.display = "grid"; 
    if (requestForm.style.display === "none" || requestForm.style.display === "") {
        requestForm.style.display = "block";  
        rqBtn.style.backgroundColor = "#cac8c8"; 
    } else {
        requestForm.style.display = "none";  
        rqBtn.style.backgroundColor = "#31ace0";
    }
 
    userInfo.style.display = "none"; 
    profileBtn.style.backgroundColor = "#31ace0";
});

profileBtn.addEventListener("click", function () { 
    mainContent.style.display = "none";
    requestForm.style.display = "none"; 
    userInfo.style.display = "block";  
    profileBtn.style.backgroundColor = "#cac8c8";
    rqBtn.style.backgroundColor = "#31ace0";
});
