<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Load Spectre -->
	<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">

</head>
<body>
	<div class="container">
		<div class="form-group">
			<h1>Okuwcy gosh: </h1>
			<form action="" method="POST">
				<label class="form-label" for="name">Doly Ady: </label>
	 	 		<input class="form-input" type="text" name="fullName" id="name" placeholder="Doly Ady">
			</form>
			<h1>Onki Gosulanlary uytget: </h1>
			<?php foreach ($posts as $post): ?>
				<form action="" method="POST" class="form-horizontal">
					<div class="form-group">
						<div class="col-3">
						  <p>Ady: </p>
						</div>
						<div class="col-9">
							<?= $post['fullName'] ?>
							<?= $post['dayOne'] ?>
							<?= $post['dayTwo'] ?>
							<?= $post['dayThree'] ?>
							<?= $post['dayFour'] ?>
							<?= $post['dayFive'] ?>
							<?= $post['daySix'] ?>
							<?= $post['daySeven'] ?>
							<?= $post['sum'] ?>
							<?= $post['status'] ?>
						</div>
					</div>
				</form>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>