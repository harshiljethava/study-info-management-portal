function validatedash(){  
    var rb1=document.form2.rbb.value;  
   /* var password=document.myform.password.value; 
	var contact=document.myform.contact.value;
		var enroll=document.myform.enroll.value;
			var email=document.myform.email.value;
     */ 
    if (rb1==null || rb1==""){  
      alert("Please select any one ");  
	  document.form2.rb1.focus();
      return false;  
    }
}
      