function validateUserLogin() {
	var user = document.querySelector('#user_login').value;
	var regexUser = /^[a-z0-9_-]{4,15}$/;

	if(regexUser.test(user)) {
		return true;
	}

	alert('invalid username');
	return false;
};

function validatePasswordLogin() {
	var pass = document.querySelector('#pass_login').value;
	var regexPass =/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

	if(regexPass.test(pass)) {
		return true;
	}

	alert('invalid password');
	return false;
};

function validateData(){
	return validateUserLogin() && validatePasswordLogin();
}

var form = document.querySelector('#login');
form.addEventListener('submit', function(event) {
	if(!validateData()) {
		event.preventDefault();
	}
});
