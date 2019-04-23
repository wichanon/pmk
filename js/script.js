var boxinput = ['firstname','lastname','username','password','password_re','email','tel','department','rank']
function register_member() {
	if(
		$('#firstname').val() != "" &&
		$('#lastname').val() != "" &&
		$('#username').val() != "" &&
		$('#password').val() != "" &&
		$('#email').val() != "" &&
		$('#tel').val() != "" &&
		$('#department').val() != "" &&
		$('#rank').val() != ""
		){
		$.post(base_url+'/Register/register', {
			firstname: $('#firstname').val().trim(),
			lastname: $('#lastname').val().trim(),
			username: $('#username').val().trim(),
			password: $('#password').val().trim(),
			email: $('#email').val().trim(),
			tel: $('#tel').val().trim(),
			department: $('#department').val().trim(),
			rank: $('#rank').val().trim()
	}, function(data, textStatus, xhr) {
		/*optional stuff to do after success */
	});
	}
	else{
		for(var i =0 ;i< 9;i++){
			if($("#"+boxinput[i]).val() == ""){
				console.log(boxinput[i]);
				$("#"+boxinput[i]).addClass('input_error');
			}
			else{
				$("#"+boxinput[i]).removeClass('input_error');
			}
		}
		alert("กรุณากรอกข้อมูลให้ครบถ้วน");
	}
}

function login() {
		$.post(base_url+'/Login/check_login', {
			username: $('#username').val().trim(),
			password: $('#password').val().trim()
		}, function(data, textStatus, xhr) {
			var res = JSON.parse(data);
			console.log(res.status);
		if(res.status == "success"){
			//alert(res.title);
			//swal("สำเร็จ", "สวัสดี "+res.title+, "success");
			//swal("สำเร็จ", "", "error");
			
			window.location.href = base_url+'/'+res.href;
		}
		else{
			alert("กรุณาตรวจสอบข้อมูลอีกครั้ง");
		}
		});
}
