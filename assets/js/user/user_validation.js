function validateEmail() {
	var validation = document.querySelector('#email').value;
	var regexEmail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

	if(regexEmail.test(validation)) {
		return true;
	}

	alert('invalid email address');
	return false;
};

function validateUsername() {
	var user = document.querySelector('#user').value;
	var regexUser = /^[a-z0-9_-]{4,15}$/;

	if(regexUser.test(user)) {
		return true;
	}

	alert('invalid username');
	return false;
};

function validatePassword() {
	var pass = document.querySelector('#pass').value;
	var regexPass =/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

	if(regexPass.test(pass)) {
		return true;
	}

	alert('invalid password');
	return false;
};

function validateRepeatPass() {
	var repeatPass = document.querySelector('#repeat_pass');
	var password = document.querySelector('#pass');
	var equal = password.value === repeatPass.value;

	if(equal) {
		return true;
	}

	alert('The passwords do not match');
	return false;
};

function validateData() {
	return validateEmail() && validateUsername() && validatePassword() && validateRepeatPass();
};

var form = document.querySelector('#form_registration');
form.addEventListener('submit', function(event) {
	if(!validateData()) {
		event.preventDefault();
	}
});
