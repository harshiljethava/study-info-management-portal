function dashplz()
{
	alert("Please Login for accessing Dashboard");
	return fasle;
}
function loginplz()
{
	alert("Login plz");
	return false;
}

function validateDash()
 {  
    var r1=document.rbb.value;  
    //var password=document.myform.txtpass.value; 
	
      
    if (r1==null || r1=="")
	{  
      alert("select theory or practical");  
	  document.rbb.name.focus();
      return false;  
    }
	
   }  
 function validateCTopic()
 {  
    var t1=document.form1.topic.value;  
    var d1=document.form1.detail.value; 
	var n1=document.form1.name.value;
	var e1=document.form1.email.value;
      
    if (t1==null || t1=="")
	{  
      alert("Subject can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	if (d1==null || d1=="")
	{  
      alert("Question can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }if (n1==null || n1=="")
	{  
      alert("Name can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	if (e1==null || e1=="")
	{  
      alert("Email can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	
   
  }
function validateChangepwd()
 {  
    var r3=document.form3.rb.value;  
    var np3=document.form3.newpass.value;
	var cp3=document.form3.conpass.value; 
	var op3=document.form3.oldpass.value;
	var n3=document.form3.txten.value;
      
    if (r3==null || r3=="")
	{  
      alert("Select Teacher OR student	 ");  
	  //document.myform.name.focus();
      return false;  
    }
	if (np3!=cp3)
	{  
      alert("Password not match");  
	  //document.myform.name.focus();
      return false;  
    }if (op3==null || op3=="")
	{  
      alert("Old password cant be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	if (n3==null || n3=="")
	{  
      alert("ID can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	
   }  
 function validateContact()
 {  
    var cf1=document.cf.c1.value;  
    var cf2=document.cf.c2.value; 
	var cf3=document.cf.c3.value;
	
      
    if (cf1==null || cf1=="")
	{  
      alert("Name can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	if (cf2==null || cf2=="")
	{  
      alert("Email can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }if (cf3==null || cf3=="")
	{  
      alert("Message  can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	
   }  
 function validateFeedback()
 {  
    var ff1=document.ff.t1.value;  
    var ff2=document.ff.t2.value; 
	var ff3=document.ff.textarea.value;
	
      
    if (ff1==null || ff1=="")
	{  
      alert("Name can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	if (ff2==null || ff2=="")
	{  
      alert("Email can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }if (ff3==null || ff3=="")
	{  
      alert("Message  can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	
   }  
   
 function validateCAns()
 {  
    var t2=document.form2.topic.value;  
    var a2=document.form2.a.value; 
	var q2=document.form2.qid.value;
	var n2=document.form2.name.value;
      
    if (t2==null || t2=="")
	{  
      alert("Subject	 can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	if (a2==null || a2=="")
	{  
      alert("Answer can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }if (q2==null || q2=="")
	{  
      alert("Question No can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	if (n2==null || n2=="")
	{  
      alert("Name can't be blank");  
	  //document.myform.name.focus();
      return false;  
    }
	
   }  
   
   
  
 
 function validateLogin()
 {  
    var name=document.myform.txten.value;  
    var password=document.myform.txtpass.value; 
	
      
    if (name==null || name=="")
	{  
      alert("Name can't be blank");  
	  document.myform.name.focus();
      return false;  
    }
	else if(password.length<6)
	{  
      alert("Password must be at least 6 characters long.");  
	  document.myform.password.focus();
      return false;  
      }  
	
   }  
   
   
    function validateSignup()
	{
		var email=document.myform.txteid.value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		
   var name=document.myform.txten.value;  
    var password=document.myform.txtpass.value; 
	var repwd=document.myform.txtcpass.value;
	var contact=document.myform.txtcont.value;
		var enroll=document.myform.txten.value;
			var email=document.myform.txteid.value;
			
			 var x=document.myform.txteid.value;  
		var atposition=x.indexOf("@");  
		var dotposition=x.lastIndexOf(".");  
      
    if (name==null || name==""){  
      alert("Name can't be blank");  
	  document.myform.nam.focus();
      return false;  
    }
	 else if(enroll==null || enroll.length<=11 || enroll.length >=13 || enroll.keyCode <48 && enroll.keyCode>57)
	  {
		    alert("Enroll number must be 12 digit");  
			document.myform.txten.focus();
      return false;  
	 }
	 	
		else if (atposition<1 || dotposition<=atposition+2 || dotposition+2>=x.length){  
  		alert("Enter a valid Email ID");  
		document.myform.txteid.focus();
 			 return false;  
 		 } 
		 
	
 
 
		 else if(contact.length<=9 || contact.length>=11)
	  {
		  alert("Contact number should be 10 digit");
		document.myform.txtcont.focus();
		  return false;
	  }
	
		
	else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
	  document.myform.txtpass.focus();
      return false;  
      }  
	 
	 
	 else if(password!=repwd)
	 {
		alert("Password not matched");
		return false;
	
		 }
   }  
   
    function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
	  
	  
	  function ValidateEmail(inputText)  
    {  
		var email=document.myform.txteid.value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(inputText.value.match(mailformat))  
    {  
   
    }  
    else  
    {  
    alert("You have entered an invalid email address!");  
    document.myform.txteid.focus();  
    return false;  
    }  
    }    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		var contact=document.myform.txtcont.value;
		
			 var x=document.myform.txteid.value;  
		var atposition=x.indexOf("@");  
		var dotposition=x.lastIndexOf(".");  
	
function validforget()
{
		var email=document.myform.txteid.value;
	
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(inputText.value.match(mailformat))  
    {  
   
    }  
   	
	  else
    {  
    alert("You have entered an invalid email address!");  
    document.myform.txteid.focus();  
    return false;  
    }  
	
	}
	
	function contact()
	{ 	var contact=document.myform.contact.value;
		 if(contact.length<=9 || contact.length>=11)
	  {
		  alert("Contact number should be 10 digit");
		document.myform.contact.focus();
		  return false;
	  }
	   var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
		}