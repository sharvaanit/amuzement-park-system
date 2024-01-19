function validate(){
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    if(username=="admin"&&password=="Staff@123")
    {
        alert("LOGIN SUCCESSFUL");
        window.open(
            "staff1.php", "_blank");
            
    }
    else{
        alert("INVALID CREDENTIALS");
    }

}