 // Defining a function to display error message
function printError(elemId, hintMsg) {
   document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
   // Retrieving the values of form elements 
   var name = document.myForm.name.value;
   var email = document.myForm.email.value;
   var number = document.myForm.number.value;
   var physical = document.myForm.physical.value;
   var occupation = document.myForm.occupation.value;
 
    
   
  // Defining error variables with a default value
   var nameErr = emailErr = numberErr = physicalErr = occupationErr = true;
   
   // Validate name
   if(name == "") {
       printError("nameErr", "Please customers name");
   } else {
       var regex = /^[a-zA-Z\s]+$/;                
       if(regex.test(name) === false) {
           printError("nameErr", "Please enter a valid name");
       } else {
           printError("nameErr", "");
           nameErr = false;
       }
   }
   
  
   if(email == "") {
       printError("emailErr", "Please enter customers email address");
   } else {
    
       var regex = /^\S+@\S+\.\S+$/;
       if(regex.test(email) === false) {
           printError("emailErr", "Please enter a valid email address");
       } else{
           printError("emailErr", "");
           emailErr = false;
       }
   }
   
 
   if(number == "") {
       printError("numberErr", "Please enter customers mobile number");
   } else {
       var regex = /^[1-9]\d{9}$/;
       if(regex.test(mobile) === false) {
           printError("numberErr", "Please enter a valid 10 digit mobile number");
       } else{
           printError("numberErr", "");
           mobileErr = false;
       }
   }
 
   if(physical == "") {
       printError("physicalErr", "Please enter customers physical address");
   } else {
       printError("physicalErr", "");
       countryErr = false;
   }
   
 
   if(occcupation == "") {
       printError("occcupationErr", "Please enter customers occupation");
   } else {
       printError("occupationErr", "");
       occupationErr = false;
   }
   
   // Prevent the form from being submitted if there are any errors
   if((nameErr || emailErr || numberErr || physicalErr || occupationErr) == true) {
      return false;
   } else {
       // Creating a string from input data for preview
       var dataPreview = "You've entered the following details: \n" +
                         "Full Name: " + name + "\n" +
                         "Email Address: " + email + "\n" +
                         "Phone Number: " + number + "\n" +
                         "Physical address: " + physical+ "\n" +
                         "Occupation: " + occupation + "\n";
      
                         alert(dataPreview);
   }
   
};