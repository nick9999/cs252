$(document).ready(function(){
	
	$(function() {
		$("#dialog").dialog({
			autoOpen: false
		});
		$("#button2").on("click", function() {
			$("#dialog").dialog("open");
			$("#dialog1").dialog("close");
			//document.getElementById("button1").disabled = true;	
			//document.getElementById("dialog1").style.visibility = 'hidden';	

		});
	});

	//validating Form Fields.....
	$("#submit").click(function(e){

	var email = $("#email").val();
	var name = $("#name").val();
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	document.getElementById("button1").disabled = false;
	if( email =='' || name =='' || username=='' || password=='' || repassword=='' || phone=='')
       {
		 alert("Please fill all fields...!!!!!!");
		 e.preventDefault();
       }
    else if(!(email).match(emailReg))
       {
         alert("Invalid Email...!!!!!!");
		 e.preventDefault();
       }    
	else 
	   {
         alert("Form Submitted Successfully......");
	   }
	
	});
		
});
