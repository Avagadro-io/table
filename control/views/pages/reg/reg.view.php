<?php require_once 'views/partials/header.view.php'; ?>
<!-- Page Content -->
<style>
body{ font-family: "Ubuntu",sans-serif; }
.inner-content{
	width: 65%;
	margin: 2em auto;
	padding: 10px 12px;
	color: #333333;
	background-color: #eee;
	font-size: 14px;
	line-height: 1.42857143;
}
</style>
<div class="inner-content">
	<div style="height: 45px;"></div>
	<form action="" method="POST">
		<label for="fullName">Full Name: </label>
		<input type="text" name="fullName" id="fullName" placeholder="Full Name" class="form-control" required="required">
		<input type="submit" name="submit" class="btn btn-primary" style="margin-top: 20px; float: right;" value="Goş">
	</form>
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