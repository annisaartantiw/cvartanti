<?php
    include("admin/_partials/head.php");
?>

<div class="container">
		<div class="panel panel-default">
		<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="<?= base_url('login/') ?>" method="post">
				<div class="col-md-12 col-md-offset-12 kotak">
					<h3>Silahkan Login ..</h3>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="input-group">			
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
		</div>
		
		</div>
	</div>

<body>