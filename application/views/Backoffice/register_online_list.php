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
						<div class="col-3 title_page">รายชื่อสมัครสัมมนา</div>
						<div class="col-3 text-right"></div>
					</div>
					<div class="row">
						<div class="col-12">
							<table class="table datatable">
								<thead>
									<tr>
										<th>#</th><th>หัวข้อสัมมนา</th><th>ชื่อ</th><th>นามสกุล</th><th>เพศ</th><th>อีเมล</th><th>เบอร์</th><!-- <th></th> -->
									</tr>
								</thead>
								<tbody>
									<?php $i=1; foreach ($list as $key => $value): ?>
									<tr>
										<td><?=$i++?></td>
										<td><?=$value['seminar']?></td>
										<td><?=$value['firstname_th']?></td>
										<td><?=$value['lastname_th']?></td>
										<td><?=$value['sex']?></td>
										<td><?=$value['email']?></td>
										<td><?=$value['phonenumber']?></td>
										<!-- <td><button class="ml-1 btn_red" id="<?=$value['id']?>" onclick="delete_register_online_list(this.id)">Delete</button></td> -->
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