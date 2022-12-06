// JavaScript Document
//check out start

function formValidate() {
  var fm = document.forms["form1"]["f-name"].value;
  var em = document.forms["form1"]["l-name"].value;
    var st = document.forms["form1"]["street"].value;
  var ci = document.forms["form1"]["city"].value;
    var co = document.forms["form1"]["country"].value;
  var ho = document.forms["form1"]["houseno"].value;
    var ne = document.forms["form1"]["nebor"].value;
  var cn = document.forms["form1"]["card_number"].value;
   var ex = document.forms["form1"]["expire"].value;
    var se = document.forms["form1"]["security"].value;
 
  if (fm == "") 
  {
    alert("First Name must be filled out!");
    return false;
  }
  
  if (em == "") 
  {
    alert("Last Name must be filled out!");
    return false;
  }
   if (st == "") 
  {
    alert("Street must be filled out!");
    return false;
  } 
  if (ci == "") 
  {
    alert("City must be filled out!");
    return false;
  } 
  if (co == "") 
  {
    alert("country must be filled out!");
    return false;
  }
   if (ho == "") 
  {
    alert("House Number must be filled out!");
    return false;
  }
  
   if (ne == "") 
  {
    alert("Neborhood must be filled out!");
    return false;
  }
  
   if (cn == "") 
  {
    alert("Card Number must be filled out!");
    return false;
  }
  
   if (ex == "") 
  {
    alert("Expire Date must be filled out!");
    return false;
  }
  
   if (se == "") 
  {
    alert("CCV must be filled out!");
    return false;
  }
  
  
  
   var phoneno = /^\d{16}$/;
  if(cn.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Not a valid Card Number");
     return false;
  }
  
  
  
  
}

//checkout end

//login start

function loginValidate() {
  var pa = document.forms["login"]["password"].value;
  var em = document.forms["login"]["email"].value;
 
  if (em == "") 
  {
    alert("Email must be filled out!");
    return false;
  }
  
  if (pa == "") 
  {
    alert("Password must be filled out!");
    return false;
  }
}

//login end

// register start

function regValidate() {
  var fm = document.forms["signup"]["Fname"].value;
  var em = document.forms["signup"]["Lname"].value;
    var email = document.forms["signup"]["email"].value;
  var ph = document.forms["form1"]["phone"].value;
    var pas = document.forms["form1"]["password"].value;
  var pas1 = document.forms["form1"]["cofpassword"].value;
 
  if (fm == "") 
  {
    alert("First Name must be filled out!");
    return false;
  }
  
  if (em == "") 
  {
    alert("Last Name must be filled out!");
    return false;
  }
   if (email == "") 
  {
    alert("email must be filled out!");
    return false;
  } 
  if (ph == "") 
  {
    alert("Phone must be filled out!");
    return false;
  } 
  if (pas == "") 
  {
    alert("Password must be filled out!");
    return false;
  }
   if (pas1 == "") 
  {
    alert("Confirm Password Number must be filled out!");
    return false;
  }
  
 
  
  
   var phoneno = /^\d{10}$/;
  if(ph.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Not a valid Phone Number");
     return false;
  }
  
  
  
  
}



//register end


function formValidate11() {
  var fm = document.forms["form1"]["name"].value;
  var em = document.forms["form1"]["email"].value;
 
  if (fm == "") 
  {
    alert("Name must be filled out!");
    return false;
  }
  
  if (em == "") 
  {
    alert("E-mail must be filled out!");
    return false;
  }
}








function phonenumber(inputtxt)
{	
  var phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Not a valid Phone Number");
     return false;
	 window.history.back();
  }
  }


//login 



