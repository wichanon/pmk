<html>
	<head>
		<title>:: PMK ::</title>
		<?php $this->load->view('backoffice/_config'); ?>

	</head>
		
	<body>
		<?php $this->load->view('backoffice/topbar');?>
		<div class="container-fluid">
			<div class="row">
				<?php $this->load->view('backoffice/menubar'); ?>
				<div class="col-10">
					<div class="row">
						<div class="col-6"><h3 class="title_page">แก้ไขโครงสร้างบุคลากร
</h3></div>
					</div>
					<div class="row">
						<div class="col-9 mx-auto">
							<div class="boxx">
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="title">ชื่อ</label>
    										<input type="text" class="form-control" id="name" placeholder="ชื่อ" value="<?=$data['name'];?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="title">ตำแหน่ง</label>
    										<input type="text" class="form-control" id="rank" placeholder="ตำแหน่ง" value="<?=$data['rank'];?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="title">แผนก</label>
    										<input type="text" class="form-control" id="department" placeholder="ตำแหน่ง" value="<?=$data['department'];?>">
										</div>
									</div>
								</div>
								
								<div class="row mt-3">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="image">รูปภาพ <div class="spinner-border text-info" id="spinner" style="display: none" role="status"><span class="sr-only">Loading...</span></div></label>
											<div class="custom-file">
												<input type="hidden" id="image_path" value="<?=$data['image'];?>">
											  	<input type="file" class="custom-file-input" id="image" accept="image/*" onchange="uploadFile('image')">
											  	<label class="custom-file-label" for="image" id="image_name">Choose file</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-9 mx-auto">
										<button class="btn_login mx-auto" onclick="edit_about_structure(<?=$data['id']?>)">บันทึก</button>
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