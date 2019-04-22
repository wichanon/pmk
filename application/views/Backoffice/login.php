<html>
	<head>
		<title>:: PMK ::</title>
		<?php $this->load->view('backoffice/_config'); ?>
	</head>
	<body>
		<div class="box_login mx-auto shadow pt-3">
			<div class="logo mx-auto mb-3"><img src="../../images/logo.png" alt=""></div>
			<div class="row">
				<div class="col-9 mx-auto">
					<div class="form-group">
    					<label for="user">Username :</label>
    					<input type="user" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
  					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-9 mx-auto">
					<div class="form-group">
    					<label for="password">Password</label>
    					<input type="password" class="form-control" id="password" placeholder="Password">
					</div>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-9 mx-auto">
					<button class="btn_login mx-auto" onclick="login()">LOGIN</button>
				</div>
			</div>
		</div>
	</body>
</html>