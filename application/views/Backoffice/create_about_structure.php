<html>
	<head>
		<title>:: PMK ::</title>
		<?php $this->load->view('backoffice/_config'); ?>

	</head>
		
	<body>
		<?php $this->load->view('backoffice/topbar'); ?>
		<div class="container-fluid">
			<div class="row">
				<?php $this->load->view('backoffice/menubar'); ?>
				<div class="col-10">
					<div class="row">
						<div class="col-6"><h3 class="title_page">เพิ่มบุคลากร</h3></div>
					</div>
					<div class="row">
						<div class="col-9 mx-auto">
							<div class="boxx">
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="title">ชื่อ</label>
    										<input type="text" class="form-control" id="name" placeholder="ชื่อ">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="detail">ตำแหน่ง</label>
    										<input type="text" class="form-control" id="rank" placeholder="ชื่อตำแหน่ง"></input>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="detail">แผนก</label>
    										<input type="text" class="form-control" id="department" placeholder="ชื่อแผนก"></input>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="detail">การศึกษา</label>
    										<input type="text" class="form-control" id="education" placeholder="การศึกษา"></input>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="detail">ผู้อำนวยการ</label><br>
    										<input type="radio" name="is_director" value="0" checked>ไม่ใช่
    										<input type="radio" name="is_director" value="1" >ใช่
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="detail">หน้าที่</label>
    										<select class="form-control" name="" id="role">
    											<option value="แพทย์ที่ปรึกษา">แพทย์ที่ปรึกษา</option>
    											<option value="อาจารย์แพทย์">อาจารย์แพทย์</option>
    											<option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
    										</select>
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="image">รูปภาพ <div class="spinner-border text-info" id="spinner" style="display: none" role="status"><span class="sr-only">Loading...</span></div></label>
											<div class="custom-file">
												<input type="hidden" id="image_path">
											  	<input type="file" class="custom-file-input" id="image" accept="image/*" onchange="uploadFile('image')">
											  	<label class="custom-file-label" for="image" id="image_name">Choose file</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-9 mx-auto">
										<button class="btn_login mx-auto" onclick="create_about_structure()">บันทึก</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
	</body>

</html>