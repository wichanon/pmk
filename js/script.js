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
var radio_box_regis =['firstname','lastname','firstname_eng','lastname_eng','office','province','phone','email','payment']
function register_seminar($name_seminar) {
	$work = $('input:radio[name=work]:checked').val();
	if($('input:radio[name=work]:checked').val() == "other"){
		$work = $('#work_other').val().trim()
	}
	if(
		$('#firstname').val() != "" &&
		$('#lastname').val() != "" &&
		$('#firstname_eng').val() != "" &&
		$('#lastname_eng').val() != "" &&
		$('#office').val() != "" &&
		$('#province').val() != "" &&
		$('#phone').val() != "" &&
		$('#email').val() != "" &&
		$('#payment').val() != "" 
		)
	{
		$.post(base_url+'/Seminar/register_seminar', {
				seminar: $name_seminar,
				firstname: $('#firstname').val().trim(),
				lastname: $('#lastname').val().trim(),
				firstname_eng: $('#firstname_eng').val().trim(),
				lastname_eng: $('#lastname_eng').val().trim(),
				sex: $("input:radio[name=sex]:checked").val(),
				office: $('#office').val().trim(),
				province: $('#province').val().trim(),
				phone: $('#phone').val().trim(),
				email: $('#email').val().trim(),
				work: $work,
				payment: $('#payment').val()
			}, function(data, textStatus, xhr) {
				/*optional stuff to do after success */
		});
	}
	else{
		for(var i =0 ;i< 9;i++){
			if($("#"+radio_box_regis[i]).val() == ""){
				console.log(boxinput[i]);
				$("#"+radio_box_regis[i]).addClass('input_error');
			}
			else{
				$("#"+radio_box_regis[i]).removeClass('input_error');
			}
		}
		alert("กรุณากรอกข้อมูลให้ครบถ้วน");
	}
	
}
function register_elective() {
	$.post(base_url+'/Elective/register_elective', {
		firstname: $('#firstname').val().trim(),
		lastname: $('#lastname').val().trim(),
		sex: $("input:radio[name=sex]:checked").val(),
		email: $('#email').val().trim(),
		phone: $('#phone').val().trim(),
		department_reg: $('#department_reg').val().trim(),
		start_date: $('#start-date').val(),
		end_date: $('#end-date').val(),
		description: $('#description').val().trim()
		
	}, function(data, textStatus, xhr) {
		/*optional stuff to do after success */
	});
}