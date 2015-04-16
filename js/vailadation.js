function validateForm(){
   var name = document.forms["form-group"]["name"].value;
   var inquirey = document.forms["form"]["comment"].value;
   
   var entered = false;
   //vaildate the information

   if(name == null || name == ""){
     // will set the text in the form to say the message instead of an alert 
     alert("Name must be filled out");
         return entered;
   }
   //checks to seee if any special chars were entered in the name 
   else if(name == "%" || name == "&" || name == "@" || name == "£" || name == "*" ||name == ")" ||name == "(" ||name == "+" ||name == "-" ||name == "_" ||name == "=" ||name == "!"){
     alert("Name can not contain special charcitors");
   }else if(inquirey == null || inquirey == ""){
   	 alert("Please fill in your inquirey");
          return entered;
   }else{

  }
}