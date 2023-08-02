//password hide and show field 
var x = document.getElementById("toggle");
x.addEventListener("click",function(){
    var y = document.getElementById("input2");

    // check if the input is a password 
    if(y.type==="password"){
        y.type="text";
    }
        else{
            y.type="password";
        }
    
})

