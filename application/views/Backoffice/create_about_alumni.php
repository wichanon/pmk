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
						<div class="col-6"><h3 class="title_page">เพิ่มศิษย์เก่า</h3></div>
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
    										<label for="detail">รุ่น</label>
    										<input type="text" class="form-control" id="generation" placeholder="ex.12"></input>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="detail">ปี</label>
    										<input type="text" class="form-control" id="year" placeholder="ex.2562"></input>
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="branch">สาขาที่จบ</label>
    										<input type="text" class="form-control" id="branch" placeholder="สาขา...." />
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="present">งานปัจจุบัน</label>
    										<input type="text" class="form-control" id="present" placeholder="งาน...." />
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
										<button class="btn_login mx-auto" onclick="create_about_alumni()">บันทึก</button>
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