const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
        
    })
})      

links.forEach(link => {
    link.addEventListener("click", e => {
       e.preventDefault(); //preventing form submit
       forms.classList.toggle("show-signup");
    })
})

/*=========================Singup validation================ */
function validateSignUp() {
    //<<<<<<  Name validation  >>>>>>>
    var name=document.getElementById("fullName").value;
    var nameError =document.getElementById("nameError");
    if(name==""){
        nameError.innerHTML="Your full name please "
        return false 
    }
    else if (name.length<5){
        nameError.innerHTML="Your full name must containt atleast 5 letters"
        return false
    }

    else if (/^[a-zA-Z ]+$/.test(name)==false){
       
       document.getElementById("nameError").innerHTML="Your name can only contain letters. "
        return false
    }
     else{
        nameError.innerHTML=""
    }
    //<<<<<<  age validation  >>>>>>>
    ageError=document.getElementById("ageError");
    var birthDateValue=document.getElementById("dateBirth").value;
    var  birthDate= new Date(birthDateValue);
    var today = new Date();
    var age=today.getFullYear()-birthDate.getFullYear()
   const hasBirthdayOccurred =
    today.getMonth() > birthDate.getMonth() ||
    (today.getMonth() === birthDate.getMonth() &&
      today.getDate() >= birthDate.getDate());
      if(hasBirthdayOccurred){
        age =age -1
      }
      if (birthDateValue==""){
        ageError.innerHTML='Please enter your date of Birth';
        return false;
      }
      else if(age<12){
        ageError.innerHTML='Sorry,your age must be 12+ years old';
        return false
        }
      else{
        ageError.innerHTML='';

      }
   /*=========================email validation ================ */
    var emailError =document.getElementById("emailError");
    var email=document.getElementById("email").value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
   
//      var xhttp = new XMLHttpRequest();
     
//     xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       if(this.responseText == 'true'){
//         emailError.innerHTML="Email already exists"
//         return false
        
//       } 
//     }
//  };
//  xhttp.open("POST", "../php/connection.php=" + email, true);
//  xhttp.send();
// const email = $('#email').val();

//   $.ajax({
//     url: '../php/connection.php',
//     type: 'POST',
//     data: {
//       email: email
//     },
//     dataType: 'json',
//     success: function(response) {
//       if (response.status === 'error') {
//         // email already exists
        
//         emailError.innerHTML=response.message;
//         return false
//       } 
//     }
//   });
    
     if(email==""){
        
        emailError.innerHTML="Your email please "
        return false 
    }
    
    else if (!emailPattern.test(email)) {
      emailError.innerHTML = "Invalid email format [name@example.com]";
        return false 
    } 
    
    else {
      emailError.textContent = "";
    }  
    //<<<<<<  gender validation  >>>>>>>   
    var male = document.getElementById('male').checked;
    var female = document.getElementById('female').checked;
    var genderError =document.getElementById("genderError");
    var genderValue=""
    if(male==false&&female==false){
        genderError.innerHTML="Please select your Gender "
        
        return false
    }
    if(male==true){
      genderValue="M"
    }
    else{genderValue="F"}
    
     //<<<<<<  password validation  >>>>>>>  
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var pass=document.getElementById("pass").value;
    var passError =document.getElementById("passError");
    if(pass==""){
        passError.innerHTML="Enter a Password"
        return false
    }
    else if(!passwordPattern.test(pass)){
        passError.innerHTML="Week password"
        
        return false
    }
    else{
        passError.innerHTML=""
    }
     //<<<<<<  confirm password validation  >>>>>>>  
    var confirmPass=document.getElementById("confirmPass").value;
    var confirmPassError =document.getElementById("confirmPassError");
    if (pass!=confirmPass) {
        confirmPassError.innerHTML="Check your passwrod please"
        return false;
    }
    else{
        confirmPassError.innerHTML=""
        var formattedDate = birthDate.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'numeric',
            day: 'numeric'});
        data="Are you sure you want to submit this form?"+"\n"+"Full name : "+name+"\n"+"Date of birth : "+formattedDate+"\n"+"Email : "+email+"\n"+"Gender : "+genderValue
        re=confirm(data)
        if(re==false){
          return false
        }
        
    }


       
}
/*=========================Login validation================ */
function validateLogin(){
  var email=document.getElementById("loginEmail").value;
  var pass=document.getElementById("loginPass").value;
  emailError=document.getElementById("loginEmailError")
  passError=document.getElementById("loginPassError")
  if(email==""){
    emailError.innerHTML="Email is required";
    return false
  }
  else{
      emailError.innerHTML="";

  }
  if(pass==""){
    passError.innerHTML="Password is required";
  }
  else{
    passError.innerHTML="";

  }
  
} 

