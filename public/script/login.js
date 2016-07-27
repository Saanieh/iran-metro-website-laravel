var emailText = document.getElementById('email');
var passwordText = document.getElementById('password');

var emailErr = document.getElementById('emailErr');
var passwordErr = document.getElementById('passwordErr');

function onClick(){
    var flag = true;
    
   if (!emailText.value.trim()){
       emailErr.style.visibility = "visible";
       flag = false;
   }
   else
       emailErr.style.visibility = "hidden";
    
    if (!passwordText.value.trim()){
        passwordErr.style.visibility = "visible";
        flag = false;
    }
    else
        passwordErr.style.visibility = "hidden";
    
    return flag;
        
}