<?php require_once 'views/partials/header.view.php'; ?>
<!-- Page Content -->
<style>
	body{ font-family: "Ubuntu",sans-serif; }
	.inner-content{
		width: 65%;
		margin: auto;
		padding: 10px 12px;
		color: #333333;
    	background-color: #eee;
		font-size: 14px;
		line-height: 1.42857143;
	}
</style>
	<div class="inner-content">
		<div style="height: 45px;"></div>
<?php if (is_array($posts) || is_object($posts)): ?>
			<?php foreach ($posts as $post): ?>
				<form action="" method="POST">
					<select class="form-control" name="day">
						<option value="dayOne">Birinji Gün</option>
						<option value="dayTwo">Ikinji Gün</option>
						<option value="dayThree">Üçünji Gün</option>
						<option value="dayFour">Dördünji Gün</option>
						<option value="dayFive">Bäşinji Gün</option>
						<option value="daySix">Altynjy Gün</option>
						<option value="daySeven">Ýedinji Gün</option>
					</select>
					<input type="hidden" name="id" value="<?= $post['id'] ?>">
					
					<h2>Ady: <?= $post['fullName'] ?></h2>
				  	<label for="book_n">Sahypa: </label>
				  	<input type="number" name="book_n" id="book_n" class="form-control" required="required">
					<input type="submit" style="margin-top: 20px; float: right;" class="btn btn-primary" value="Sahypany Gosh">
				</form>	
				<hr>
			<?php endforeach ?>
			<?php else :?>
				<h1>Dost Adam Registrasiya Etmesen Adam Yok</h1>
			<?php endif ?>
			<?php if (isset($message)): ?>
				<div class="alert alert-success alert-dismissible fade in" role="alert" id="alerted-message">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong><?= $message ?>!</strong>
                  </div>
                  <script>
					var likeModal = document.getElementById('alerted-message');
					likeModal.addEventListener('click', () => {
							setTimeout( () => { 
								window.location.replace("/control/"); 
							}, 850);
						});
				</script>
			<?php endif ?>
	</div>	
<!-- /Page Content -->
<?php require_once 'views/partials/footer.view.php'; ?>