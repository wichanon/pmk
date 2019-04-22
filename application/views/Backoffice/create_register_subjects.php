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
						<div class="col-6"><h3 class="title_page">เพิ่มวิชาเลือก</h3></div>
					</div>
					<div class="row">
						<div class="col-9 mx-auto">
							<div class="boxx">
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="title">ชื่อวิชา</label>
    										<input type="text" class="form-control" id="name" placeholder="วิชา....">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="title">รายละเอียด</label>
    										<textarea type="text" class="form-control" id="detail" placeholder="รายละเอียด...."></textarea>
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
										<button class="btn_login mx-auto" onclick="create_register_subjects()">บันทึก</button>
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