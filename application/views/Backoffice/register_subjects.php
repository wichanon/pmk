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
					<div class="row justify-content-between">
						<div class="col-3 title_page">วิชาเลือก</div>
						<div class="col-3 text-right">
							<button class="btn_ btn_news" onclick="btn_create_register_subjects()">เพิ่มวิชาเลือก</button>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<table class="table datatable">
								<thead>
									<tr>
										<th>#</th><th>รูป</th><th>ชื่อแผนกที่เปิดรับ</th><th>รายละเอียด</th><th></th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; foreach ($list as $key => $value): ?>
									<tr>
										<td><?=$i++?></td>
										<td><img class="preview_img" src="<?=base_url().'../'.$value['image']?>"></td>
										<td><?=$value['name']?></td>
										<td><?=$value['detail']?></td>
										<td class="text-center"><a class="btn_" id="<?=$value['id']?>" href="<?=base_url().'B_register_subjects/edit/'.$value['id']?>">Edit</a><button class="ml-1 btn_red" id="<?=$value['id']?>" onclick="delete_register_subjects(this.id)">Delete</button></td>
									</tr>	
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</body>
	<script>
		 $(document).ready(function() {
		 	$('.datatable').DataTable({
		 		"pageLength" : 10
		 	})
		 });
	</script>
</html>