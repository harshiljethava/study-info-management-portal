 function clear1()
 {
	   document.myform.name.value.clear();  
    document.myform.password.value=""; 
	document.myform.contact.value="";
		document.myform.enroll.value="";
			document.myform.email.value="";
	 }
 
 function validateform(){  
    var name=document.myform.name.value;  
    var password=document.myform.password.value; 
	var contact=document.myform.contact.value;
		var enroll=document.myform.enroll.value;
			var email=document.myform.email.value;
      
    if (name==null || name==""){  
      alert("Name can't be blank");  
	  document.myform.name.focus();
      return false;  
    }else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
	  document.myform.password.focus();
      return false;  
      }  
	  else if(contact.length<=9 || contact.length>=11)
	  {
		  alert("Contact number should be 10 digit");
		document.myform.contact.focus();
		  return false;
	  }
	  else if(enroll==null || enroll.length<=11 || enroll.length >=13)
	  {
		    alert("Enroll number must be 12 digit");  
			document.myform.enroll.focus();
      return false;  
	 }
	 else	 {
		 var x=document.myform.email.value;  
		var atposition=x.indexOf("@");  
		var dotposition=x.lastIndexOf(".");  
		
		if (atposition<1 || dotposition<=atposition+2 || dotposition+2>=x.length){  
  		alert("Enter a valid Email ID");  
		document.myform.email.focus();
 			 return false;  
 		 }  
		
	
		 }
    }  
