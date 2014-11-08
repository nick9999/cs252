$(document).ready(function(){
		
	$(function() {
		$("#dialog1").dialog({
			autoOpen: false
		});
		$("#button1").on("click", function() {
			$("#dialog1").dialog("open");
			$("#dialog").dialog("close");
			//document.getElementById("button2").disabled = false;
			//document.getElementById("dialog").style.visibility = 'hidden';	
		});
	});

	//validating Form Fields.....
	$("#submit1").click(function(e){

	var email = $("#email").val();
	var name = $("#name").val();
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	document.getElementById("button2").disabled = false;
	if( email =='' || name =='' || username=='' || password=='' || repassword=='')
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