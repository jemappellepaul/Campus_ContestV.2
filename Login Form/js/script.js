//function that check the username
function usernameValidation(){
    var username = myForm.username.value;
    var p1 = document.getElementById("resultusername");
    if(username === ""){
        p1.innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
       }else if(!isNaN(username)){
        p1.innerHTML=("Το πεδίο δεν μπορεί να είναι αριθμός!");
    }else{
        p1.innerHTML="";
    }
}
//function that check the name
function fnameValidation(){
    var fname = myForm.fname.value;
    var p1 = document.getElementById("resultname");
    if(fname === ""){
        p1.innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
       }else if(!isNaN(fname)){
        p1.innerHTML=("Το πεδίο δεν μπορεί να είναι αριθμός!");
    }else{
        p1.innerHTML="";
    }
}
//function that check the surname
function snmValidation(){
    var lname = myForm.lname.value;
    var p2 = document.getElementById("resultsname");
    if(lname === ""){
        p2.innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
    }else if(!isNaN(lname)){
        p2.innerHTML=("Το πεδίο δεν μπορεί να είναι αριθμός!");
    }else{
        p2.innerHTML="";
    }
}
//function that check the email
function emailValidation(){
    var email = myForm.email.value;
    var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(email === ""){
        document.getElementById("resultemail").innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
    }else if (pattern.test(email)===false){
        document.getElementById("resultemail").innerHTML=("Το email δεν έχει τι σωστή μορφή!");
    }else{
        document.getElementById("resultemail").innerHTML="";
    }
}
//function that check the password
function passwordValidation(){
    var password = myForm.password.value;
    var pattern = /^[A-Za-z]\w{7,15}$/;
    if(password === ""){
        document.getElementById("resultpassword").innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
    }else if (pattern.test(password)===false){
        document.getElementById("resultpassword").innerHTML=("Το password δεν έχει τι σωστή μορφή!");
    }else{
        document.getElementById("resultpassword").innerHTML="";
    }
}