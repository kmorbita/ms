	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Change Password
						</h2>
					</div>
					<div class="body">
						<form class="form-horizontal">
							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="email_address_2">Current Password</label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
									<div class="form-group">
										<div class="form-line">
											<input type="password" id="curr_password" class="form-control changepass" placeholder="Enter your current password">
											<input type="hidden" id="user_id" value="<?= $_SESSION['user_id'] ?>">
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<button type="button" onclick="pass_but()" class="btn btn-default btn-xs m-t-15 waves-effect"><i class="material-icons">remove_red_eye</i></button>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="email_address_2">New Password</label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
									<div class="form-group">
										<div class="form-line">
											<input type="password" id="new_password" class="form-control changepass" placeholder="Enter your new password">
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<button type="button" onclick="newpass_but()" class="btn btn-default btn-xs m-t-15 waves-effect"><i class="material-icons">remove_red_eye</i></button>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="password_2">Verify New Password</label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
									<div class="form-group">
										<div class="form-line">
											<input type="password" id="renew_password" class="form-control changepass" placeholder="Verify your new password">
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<button type="button" onclick="repass_but()" class="btn btn-default btn-xs m-t-15 waves-effect"><i class="material-icons">remove_red_eye</i></button>
								</div>
							</div>
							<div class="row clearfix">
								<!-- <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
									<input type="checkbox" id="remember_me_3" class="filled-in">
									<label for="remember_me_3">Remember Me</label>
								</div> -->
							</div>
							<div class="row clearfix">
								<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
									<button type="button" class="btn btn-primary m-t-15 waves-effect" id="changepass">CHANGE</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>