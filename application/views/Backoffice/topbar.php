	<div class="container-fluid">
		<div class="row">
			<div class="bar_top">
				<div class="row justify-content-between">
					<div class="col-3">
						<div class="logo ml-3 mt-1"><img src="<?=base_url()?>../images/logo.png" alt=""></div>
					</div>
					<div class="col-3 btn_right">
						<a class="btn_ logout" href="<?=base_url().'B_login/logout'?>">Logout</a>
						<p class="logout"><?php echo "Admin : ".$this->session->name; ?></p>	
					</div>
				</div>
			</div>
		</div>
	</div>