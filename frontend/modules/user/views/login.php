<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

<!-- Global stylesheets -->
<link
	href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900"
	rel="stylesheet" type="text/css">
<link
	href="<?php echo Yii::getAlias('@web').'/assets/global_assets/css/icons/icomoon/styles.min.css'; ?>"
	rel="stylesheet" type="text/css">
<link
	href="<?php echo Yii::getAlias('@web').'/assets/css/bootstrap.min.css'; ?>"
	rel="stylesheet" type="text/css">
<link
	href="<?php echo Yii::getAlias('@web').'/assets/css/bootstrap_limitless.min.css'; ?>"
	rel="stylesheet" type="text/css">
<link
	href="<?php echo Yii::getAlias('@web').'/assets/css/layout.min.css'; ?>"
	rel="stylesheet" type="text/css">
<link
	href="<?php echo Yii::getAlias('@web').'/assets/css/components.min.css'; ?>"
	rel="stylesheet" type="text/css">
<link
	href="<?php echo Yii::getAlias('@web').'/assets/css/colors.min.css'; ?>"
	rel="stylesheet" type="text/css">
<!-- /global stylesheets -->

<!-- Core JS files -->
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/main/jquery.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/main/bootstrap.bundle.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/loaders/blockui.min.js'; ?>"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="<?php echo Yii::getAlias('@web').'/assets/js/app.js'; ?>"></script>
<!-- /theme JS files -->

</head>

<body>



	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form class="login-form" action="index.html">
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<img
									src="<?php echo Yii::getAlias('@web').'/assets/global_assets/images/image.png'; ?>"
									class="rounded-round mb-3 mt-1" width="110">
								<h5 class="mb-0">Login to your account</h5>
							</div>

							<div
								class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" class="form-control" placeholder="Username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div
								class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control"
									placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">
									Sign in <i class="icon-circle-right2 ml-2"></i>
								</button>
							</div>

							<!-- <div class="text-center">								
								<a href="" data-toggle="modal" data-target="#change_password_modal">Change Password?</a>
							</div> -->
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
