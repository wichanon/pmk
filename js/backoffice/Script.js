function login(){
	$.post(base_url+'/B_login/checklogin', {
		username: $('#username').val().trim(),
		password: $('#password').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		console.log(res.status);
		if(res.status == "success"){
			//alert(res.title);
			//swal("สำเร็จ", "สวัสดี "+res.title+, "success");
			swal("สำเร็จ", "", "error");
			
			window.location.href = base_url+'/'+res.href;
		}
		else{
			swal("ผิดพลาด", "กรุณาตรวจสอบข้อมูลอีกครั้ง", "error");
		}
	});
}


function delete_($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_home/del_news', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}

function create_news(){
	$.post(base_url+'/B_home/create_', {
		title: $('#title').val().trim(),
		detail: $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_public(){
	$.post(base_url+'/B_publicrelations/create_', {
		title: $('#title').val().trim(),
		detail: $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_register(){
	$.post(base_url+'/B_register/create_', {
		title: $('#title').val().trim(),
		detail: $('#detail').val().trim()
		//image: $('#image').attr("src",response)
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_seminar(){
	$.post(base_url+'/B_seminar/create_', {
		name: $('#name').val().trim(),
		detail: $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_department(){
	$.post(base_url+'/B_department/create_', {
		title: $('#title').val().trim(),
		detail: $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_about_structure(){
	$.post(base_url+'/B_about_structure/create_', {
		name: $('#name').val().trim(),
		rank: $('#rank').val().trim(),
		department: $('#department').val().trim(),
		education: $('#education').val().trim(),
		is_director: $('input:radio[name=is_director]:checked').val(),
		role: $('#role').val(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_about_alumni(){
	$.post(base_url+'/B_about_alumni/create_', {
		name: $('#name').val().trim(),
		generation: $('#generation').val().trim(),
		year: $('#year').val().trim(),
		branch: $('#branch').val().trim(),
		present: $('#present').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_register_subjects(){
	$.post(base_url+'/B_register_subjects/create_', {
		name: $('#name').val().trim(),
		detail: $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_article_technical(){
	$.post(base_url+'/B_article_technical/create_', {
		name: $('#name').val().trim(),
		detail: $('#detail').val().trim(),
		author: $('#author').val().trim(),
		author_detail: $('#author_detail').val().trim(),
		image: $('#image_path').val().trim(),
		file: $('#file_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_article_health(){
	$.post(base_url+'/B_article_health/create_', {
		name: $('#name').val().trim(),
		detail: $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
			//window.location.href = base_url+'B_home';
		}
	});
}
function create_article_download(){
	$.post(base_url+'/B_article_download/create_', {
		name: $('#name').val().trim(),
		detail: $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function create_activity_images(){
	$.post(base_url+'/B_activity_images/create_', {
		name: $('#name').val().trim(),
		detail: $('#detail').val().trim(),
		tag: $('#tag').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function create_link_connected(){
	$.post(base_url+'/B_link_connected/create_', {
		name: $('#name').val().trim(),
		url: $('#url').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function create_research(){
	$.post(base_url+'/B_research/create_', {
		name: $('#name').val().trim(),
		detail: $('#detail').val().trim(),
		image: $('#image_path').val().trim(),
		file: $('#file_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function create_slideshow(){
	$.post(base_url+'/B_slideshow/create_', {
		name: $('#name').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_public($id=1){
	$.post(base_url+'B_publicrelations/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		detail : $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}

function edit_news($id=1){
	$.post(base_url+'B_home/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		detail : $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_about_structure($id=1){
	$.post(base_url+'B_about_structure/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		rank : $('#rank').val().trim(),
		department : $('#department').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_about_alumni($id=1){
	$.post(base_url+'B_about_alumni/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		generation : $('#generation').val().trim(),
		year : $('#year').val().trim(),
		branch : $('#branch').val().trim(),
		present : $('#present').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_department($id=1){
	$.post(base_url+'B_department/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		name_eng : $('#name_eng').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_seminar($id=1){
	$.post(base_url+'B_seminar/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		detail : $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_register_subjects($id=1){
	$.post(base_url+'B_register_subjects/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		detail : $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_article_technical($id=1){
	$.post(base_url+'B_article_technical/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		detail : $('#detail').val().trim(),
		author : $('#author').val().trim(),
		author_detail: $('#author_detail').val().trim(),
		image: $('#image_path').val().trim(),
		file: $('#file_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_article_health($id=1){
	$.post(base_url+'B_article_health/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		detail : $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_article_download($id=1){
	$.post(base_url+'B_article_download/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		detail : $('#detail').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_link_connected($id=1){
	$.post(base_url+'B_link_connected/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		url : $('#url').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_research($id=1){
	$.post(base_url+'B_research/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		detail : $('#detail').val().trim(),
		image: $('#image_path').val().trim(),
		file: $('#file_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_activity_images($id=1){
	$.post(base_url+'B_activity_images/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		detail : $('#detail').val().trim(),
		tag : $('#tag').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function edit_slideshow($id=1){
	$.post(base_url+'B_slideshow/edit_', {
		id: $id,
		name : $('#name').val().trim(),
		image: $('#image_path').val().trim()
	}, function(data, textStatus, xhr) {
		var res = JSON.parse(data);
		if(res.status == "create_success"){
			swal("สำเร็จ", "บันทึกข้อมูลเรียบร้อบ", "success");
		}
	});
}
function btn_create_news() {
	window.location.href = base_url+'B_home/create';
}
function btn_create_public() {
	window.location.href = base_url+'B_publicrelations/create';
}
function btn_create_register() {
	window.location.href = base_url+'B_register/create';
}
function btn_create_seminar() {
	window.location.href = base_url+'B_seminar/create';
}
function btn_create_department() {
	window.location.href = base_url+'B_department/create';
}
function btn_create_about_structure() {
	window.location.href = base_url+'B_about_structure/create';
}
function btn_create_about_alumni() {
	window.location.href = base_url+'B_about_alumni/create';
}
function btn_create_register_subjects() {
	window.location.href = base_url+'B_register_subjects/create';
}
function btn_create_article_technical() {
	window.location.href = base_url+'B_article_technical/create';
}
function btn_create_article_health() {
	window.location.href = base_url+'B_article_health/create';
}
function btn_create_article_download() {
	window.location.href = base_url+'B_article_download/create';
}
function btn_create_activity_images() {
	window.location.href = base_url+'B_activity_images/create';
}
function btn_create_link_connected() {
	window.location.href = base_url+'B_link_connected/create';
}
function btn_create_research() {
	window.location.href = base_url+'B_research/create';
}
function btn_create_slideshow() {
	window.location.href = base_url+'B_slideshow/create';
}
function delete_public($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_publicrelations/del_public', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}

function delete_register($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_register/del_register', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_about_structure($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_about_structure/del_about_structure', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_department($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_department/del_department', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_about_alumni($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_about_alumni/del_about_alumni', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_register_subjects($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_register_subjects/del_register_subjects', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_register_online_list($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_register_subjects/del_register_subjects', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_article_technical($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_article_technical/del_article_technical', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_article_health($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_article_health/del_article_health', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_article_download($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_article_download/del_article_download', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_activity_images($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_activity_images/del_activity_images', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_seminar($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_seminar/del_seminar', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_link_connected($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_link_connected/del_link_connected', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}
function delete_slideshow($id){
	swal({
		title: "แน่ใจว่าต้องการลบข้อมูล?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
  	

  	.then((willDelete) => {
		if (willDelete) {
			$.post(base_url+'/B_slideshow/del_slideshow', {
  				id: $id
  		}, function(data, textStatus, xhr) {
  			var res = JSON.parse(data);
  			if(res.status == "del_success"){
  				swal("สำเร็จ", "ข้อมูลถูกลบเรียบร้อย", "success");
  			}
  		});
		} else {
			swal("คำสั่งถูกยกเลิก");
		}
	});
}

function menu_bar($pagename = "B_home") {
	window.location.href = base_url+$pagename;
	sessionStorage.menuactive = $pagename;
}
$(window).on('load', function() {
    $("#"+sessionStorage.menuactive).addClass('menu_active');
})