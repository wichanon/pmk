<html>
	<head>
		<title>:: PMK ::</title>
		<?php $this->load->view('backoffice/_config'); ?>
	</head>
		
	<body>
		<?php $this->load->view('backoffice/topbar');  ?>
		<div class="container-fluid">
			<div class="row">
				<?php $this->load->view('backoffice/menubar'); ?>
				<div class="col-10">
					<div class="row">
						<div class="col-6"><h3 class="title_page">ข่าวสาร</h3></div>
						<div class="col-6 text-right"><button class="btn_ btn_news" onclick="btn_create_news()">เพิ่มข่าวสาร</button></div>
					</div>
					<div class="row">
						<div class="col-12">
							<table class="table datatable">
								<thead>
									<tr>
										<th>#</th><th>รูป</th><th>Title</th><th>Detail</th><th>create_by</th><th></th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; foreach ($list as $key => $value): ?>
									<tr>
										<td><?=$i++?></td>
										<td><img class="preview_img" src="<?=base_url().'../'.$value['image']?>"></td>
										<td><?=$value['name']?></td>
										<td><?=$value['detail']?></td>
										<td><?=$value['create_by']?></td>
										<td class="text-center"><a class="btn_" id="<?=$value['id']?>" href="<?=base_url().'B_home/edit/'.$value['id']?>">Edit</a><button class="ml-1 btn_red" id="<?=$value['id']?>" onclick="edit_news(this.id)" >Delete</button></td>
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