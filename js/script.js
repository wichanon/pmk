function create_about_structure() {
	$.post(base_url+'/register', {
		firstname: $('#firstname').val().trim(),
		lastname: $('#lastname').val().trim(),
		username: $('#username').val().trim(),
		firstname: $('#firstname').val().trim(),
		firstname: $('#firstname').val().trim(),
		firstname: $('#firstname').val().trim(),
	}, function(data, textStatus, xhr) {
		/*optional stuff to do after success */
	});
}