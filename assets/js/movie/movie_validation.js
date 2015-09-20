function validateTitle(){
	var title = document.querySelector('#title').value;

	if (title.length > 2 && title.length < 50) {
		return true;
	};
	alert('the name must be a minimum of 2 and maximum of 50 characters');
	return false;
};

function validatePoster(){
	var poster = document.querySelector('#poster').value;
	var regexURL= /^(http|https):\/\/(([a-zA-Z0-9$\-_.+!*'(),;:&=]|%[0-9a-fA-F]{2})+@)?(((25[0-5]|2[0-4][0-9]|[0-1][0-9][0-9]|[1-9][0-9]|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9][0-9]|[1-9][0-9]|[0-9])){3})|localhost|([a-zA-Z0-9\-\u00C0-\u017F]+\.)+([a-zA-Z]{2,}))(:[0-9]+)?(\/(([a-zA-Z0-9$\-_.+!*'(),;:@&=]|%[0-9a-fA-F]{2})*(\/([a-zA-Z0-9$\-_.+!*'(),;:@&=]|%[0-9a-fA-F]{2})*)*)?(\?([a-zA-Z0-9$\-_.+!*'(),;:@&=\/?]|%[0-9a-fA-F]{2})*)?(\#([a-zA-Z0-9$\-_.+!*'(),;:@&=\/?]|%[0-9a-fA-F]{2})*)?)?.(bmp|jpg|png)$/i;
	var dataPoster = regexURL.test(poster);

	if (dataPoster) {
		return true;
	};

	alert('enter corect URL');
	return false;
}
console.log(1);
function validateGenres(){
	var genres = document.querySelector('#genre').value;

	if (genres === '') {
		alert('you can select at least one genre');
		return false;
	};
	return true;
}

function validateRestriction(){
	var restrict = document.querySelector('#restriction').value;

	if (restrict > 1) {
		return true;
	};
	alert('You can not choose more than one age');
	return false;
}

function data(){
return validateTitle() && validatePoster() && validateGenres() && validateRestriction();
};

var form = document.querySelector('#add_movie');
form.addEventListener('submit', function(event) {
	if (!data()) {
		event.preventDefault();
	};

});