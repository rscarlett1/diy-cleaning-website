//Find the form

var registrationForm = document.querySelector("#sign-up-padding");

//WAIT FOR USER TO SUBMIT THE FORM
	

$( document ).ready(function() {

   var Validname = false;
   var Validemail = false;
   var SigninPassword = false;

	$("#first-name").blur(function(){
		$("#name-message").empty();

		if($(this).val().length <= 0){
			$("#name-message").append("<p>This is Required</p>");
			Validname = false;
			return;
		}

		if($(this).val().length > 50){
			$("#name-message").append("<p>This field must be no more than 50 characters</p>");
			Validname = false;
			return;
		}

		if( !$(this).val().match("^[A-Za-z' .-]{1,30}$") ){
			$("#name-message").append("<p>Name is not valid</p>");
			Validname = false;
			return;
		}
		Validname = true;

	});

	var Validname = false;

	$("#last-name").blur(function(){
		$("#last-name-message").empty();

		if($(this).val().length === 0){
			$("#last-name-message").append("<p>This is Required</p>");
			Validname = false;
			return;
		}


		if($(this).val().length > 50){
			$("#last-name-message").append("<p>this field must be no longer than 50 characters</p>");
			Validname = false;
			return;
		}

		if( !$(this).val().match("^[A-Za-z' .-]{1,30}$") ){
			$("#last-name-message").append("<p>Name is not valid</p>");
			Validname = false;
			return;
		}

		Validname = true;
	});

	var Validemail = false;

	$("#email").blur(function(){
		$("#email-name-message").empty();
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if( !$(this).val().match(re) ) {
			$("#email-name-message").append("<p>Name is not valid</p>");
			FnameValid = false;
			return;
		}

		Validemail = true;

	});

	var Validemail = false;

	$("#password").blur(function(){
		$("#password-name-message").empty();

		if($(this).val().length === 0){
			$("#password-name-message").append("<p>This is Required</p>");
			Validemail = false;
			return;
		}

		Validemail = true;

	function Validate() {
        var password = document.getElementById("password-first").value;
        var confirmPassword = document.getElementById("password-confirm").value;
        if (password != confirmPassword) {
            $("password-confirm-message").append("<p>Passwords do not match</p>");
            SigninPassword = false;
            return;
        }

        SigninPassword = true;
    };

	});

	 $('#loginButton').click(function(event){
		event.preventDefault();
		if(ValidName === true && ValidEmail === true){
			$( "#LogininForm" ).submit();	
		}
	});









});






