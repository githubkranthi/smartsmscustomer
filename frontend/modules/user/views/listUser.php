<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/tables/datatables/datatables.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/forms/selects/select2.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/demo_pages/datatables_responsive.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/demo_pages/form_select2.js'; ?>"></script>

<div class="row">
	<div class="col-lg-12">
		<div class="mb-2 float-right">
			<a href="register-form.html" class="btn bg-primary"><i
				class="icon-plus22"></i> Add</a>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<table class="table datatable-responsive">
			<thead>
				<tr>
					<th>Sl No.</th>
					<th>Role</th>
					<th>Full name</th>
					<th>User Name</th>
					<th>Password</th>
					<th>Mobile / Email</th>
					<th>Credits</th>
					<th>Organisation</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Admin</td>
					<td>Praveen</td>
					<td>Praveenj</td>
					<td>12345</td>
					<td>9700292965<br>praveenkumarjagarlamudi@gmail.com
					</td>
					<td class="text-center"><a href="#"
						class="badge badge-info list-icons-item" data-toggle="modal"
						data-target="#update_credits_info" title="Update Credits"> <i
							class="icon-plus22" style="color: #fff;"></i>
					</a> <!-- Update Credits -->
						<div id="update_credits_info" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Update Credits</h5>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<form action="#" class="form-horizontal">
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-form-label col-sm-3">Type</label>
												<div class="col-sm-9">
													<select class="form-control">
														<option>---- Select ----</option>
														<option>Add</option>
														<option>Deduction</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">Credits</label>
												<div class="col-sm-9">
													<input type="text" class="form-control">
												</div>
											</div>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-light"
												data-dismiss="modal">Cancel</button>
											<button type="submit" class="btn bg-warning">Update</button>
										</div>
									</form>
								</div>
							</div>
						</div> <!-- /Update Credits form modal -->

						<div class="list-icons">
							<div class="dropdown">
								<a href="#" class="badge badge-dark list-icons-item"
									data-toggle="dropdown" title="Credits Info"> <i
									class="icon-info3" style="color: #fff;"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<table class="table">
										<thead>
											<tr>
												<th>Total</th>
												<th>Used</th>
												<th>Balance</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>100</td>
												<td>30</td>
												<td>70</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div></td>
					<td>School of business</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"><i
							class="icon-pencil5" aria-hidden="true"></i></a> <a href=""
						class="badge badge-warning bg-pink-400 mb-1"
						title="Change Password" data-toggle="modal"
						data-target="#change_password"><i class="icon-key"
							aria-hidden="true"></i></a> <!-- Change Password form modal -->
						<div id="change_password" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Change Password</h5>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<form action="#" class="form-horizontal">
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-form-label col-sm-3">User name</label>
												<div class="col-sm-9">
													<input type="text" class="form-control">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">New Password</label>
												<div class="col-sm-9">
													<input type="password" class="form-control">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">Confirm Password</label>
												<div class="col-sm-9">
													<input type="password" class="form-control">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-light"
												data-dismiss="modal">Cancel</button>
											<button type="submit" class="btn bg-warning">Update</button>
										</div>
									</form>
								</div>
							</div>
						</div> <!-- /Change Password form modal --> <a href="#"
						class="badge badge-info bg-purple-300 list-icons-item"
						data-toggle="modal" data-target="#cut_off_service"
						title="Cut off service"> <i class="icon-scissors"
							style="color: #fff;"></i>
					</a> <!-- Cut off service form modal -->
						<div id="cut_off_service" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Cut Off Services</h5>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<form action="#" class="form-horizontal">
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-form-label col-sm-3">Users</label>
												<div class="col-sm-9">
													<select class="form-control select-search"
														data-fouc="focus">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="WY">Wyoming</option>
														<option value="AL">Alabama</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">Gateway</label>
												<div class="col-sm-9">
													<select class="form-control select-search"
														data-fouc="focus">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="WY">Wyoming</option>
														<option value="AL">Alabama</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">Cut Off</label>
												<div class="col-sm-9">
													<input type="text" class="form-control"> <span
														class="form-text text-muted">Eg:- 10%, 20% etc...</span>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">Apply cut off after
													the count</label>
												<div class="col-sm-9">
													<input type="text" class="form-control"> <span
														class="form-text text-muted">Eg:- > 1000 / > 20000 etc...</span>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">Do not apply cut off
													for first </label>
												<div class="col-sm-9">
													<input type="text" class="form-control"> <span
														class="form-text text-muted">Eg:- > 2% / > 3% etc...</span>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">Do not apply cut off
													for last </label>
												<div class="col-sm-9">
													<input type="text" class="form-control"> <span
														class="form-text text-muted">Eg:- > 2% / > 3% etc...</span>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-light"
												data-dismiss="modal">Cancel</button>
											<button type="submit" class="btn bg-warning">Apply</button>
										</div>
									</form>
								</div>
							</div>
						</div> <!-- /Cut off service form modal --> <a href=""
						class="badge badge-danger" title="Delete"><i class="icon-trash"
							aria-hidden="true"></i></a></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Admin</td>
					<td>Praveen</td>
					<td>Praveenj</td>
					<td>12345</td>
					<td>9700292965<br>praveenkumarjagarlamudi@gmail.com
					</td>
					<td class="text-center"><a href="#"
						class="badge badge-info list-icons-item" data-toggle="modal"
						data-target="#update_credits_info" title="Update Credits"> <i
							class="icon-plus22" style="color: #fff;"></i>
					</a> <!-- Change Password form modal -->
						<div id="update_credits_info" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Update Credits</h5>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<form action="#" class="form-horizontal">
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-form-label col-sm-3">Type</label>
												<div class="col-sm-9">
													<select class="form-control">
														<option>---- Select ----</option>
														<option>Add</option>
														<option>Deduction</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">Credits</label>
												<div class="col-sm-9">
													<input type="text" class="form-control">
												</div>
											</div>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-light"
												data-dismiss="modal">Cancel</button>
											<button type="submit" class="btn bg-warning">Update</button>
										</div>
									</form>
								</div>
							</div>
						</div> <!-- /Change Password form modal -->

						<div class="list-icons">
							<div class="dropdown">
								<a href="#" class="badge badge-dark list-icons-item"
									data-toggle="dropdown" title="Credits Info"> <i
									class="icon-info3" style="color: #fff;"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<table class="table">
										<thead>
											<tr>
												<th>Total</th>
												<th>Used</th>
												<th>Balance</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>100</td>
												<td>30</td>
												<td>70</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div></td>
					<td>School of business</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"><i
							class="icon-pencil5" aria-hidden="true"></i></a> <a href=""
						class="badge badge-warning mb-1" title="Change Password"
						data-toggle="modal" data-target="#change_password"><i
							class="icon-key" aria-hidden="true"></i></a> <!-- Change Password form modal -->
						<div id="change_password" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Change Password</h5>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<form action="#" class="form-horizontal">
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-form-label col-sm-3">User name</label>
												<div class="col-sm-9">
													<input type="text" class="form-control">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">New Password</label>
												<div class="col-sm-9">
													<input type="password" class="form-control">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-sm-3">Confirm Password</label>
												<div class="col-sm-9">
													<input type="password" class="form-control">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-light"
												data-dismiss="modal">Cancel</button>
											<button type="submit" class="btn bg-warning">Update</button>
										</div>
									</form>
								</div>
							</div>
						</div> <!-- /Change Password form modal --> <a href=""
						class="badge badge-danger" title="Delete"><i class="icon-trash"
							aria-hidden="true"></i></a></td>
				</tr>

			</tbody>
		</table>
	</div>
</div>