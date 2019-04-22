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
						<div class="col-6"><h3 class="title_page">เพิ่มลิงค์ที่เกี่ยวข้อง</h3></div>
					</div>
					<div class="row">
						<div class="col-9 mx-auto">
							<div class="boxx">
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="title">ชื่อลิงค์ที่เกี่ยวข้อง</label>
    										<input type="text" class="form-control" id="name" placeholder="ลิงค์ที่เกี่ยวข้อง...." value="<?=$data['name'];?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-9 mx-auto">
										<div class="form-group">
    										<label for="title">Url</label>
    										<input type="text" class="form-control" id="url" placeholder="www.google.com" value="<?=$data['url'];?>">
										</div>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-9 mx-auto">
										<button class="btn_login mx-auto" onclick="edit_link_connected(<?=$data['id']?>)">บันทึก</button>
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