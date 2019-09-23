
<div class="card">

	<div class="d-md-flex">
		<ul
			class="nav nav-tabs nav-tabs-vertical flex-column mr-md-3 wmin-md-200 mb-md-0 border-bottom-0">
			<li class="nav-item"><a href="#change_password_tab"
				class="nav-link active" data-toggle="tab"> Change Password</a></li>
			<li class="nav-item"><a href="#edit_details_tab" class="nav-link"
				data-toggle="tab"> Edit Details</a></li>
			<li class="nav-item"><a href="#virtual_count_tab" class="nav-link"
				data-toggle="tab"> Virtual Count</a></li>
		</ul>
		<div class="card-body">
			<div class="tab-content">
				<div class="tab-pane fade show active" id="change_password_tab">
					<form action="#">
						<div class="form-group row">
							<label class="col-form-label col-sm-3">Current Password</label>
							<div class="col-sm-9">
								<input type="password" class="form-control">
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
						<div class="form-group row">
							<label class="col-form-label col-sm-3">&nbsp;</label>
							<div class="col-sm-9">
								<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn bg-warning">Update</button>
							</div>
						</div>
					</form>
				</div>

				<div class="tab-pane fade" id="edit_details_tab">
					<form action="#">
						<div class="form-group row">
							<label class="col-form-label col-sm-3">User Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-sm-3">Email</label>
							<div class="col-sm-9">
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-sm-3">Organisation</label>
							<div class="col-sm-9">
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-sm-3">Mobile</label>
							<div class="col-sm-9">
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-sm-3">Full Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-sm-3">&nbsp;</label>
							<div class="col-sm-9">
								<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn bg-warning">Update</button>
							</div>
						</div>
					</form>
				</div>

				<div class="tab-pane fade" id="virtual_count_tab">
					<form action="#">
						<div class="form-group row">
							<label class="col-form-label col-sm-3">Current</label>
							<div class="col-sm-9">
								<div class="form-control-plaintext">0 | 1000</div>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-sm-3">Add Count</label>
							<div class="col-sm-9">
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-sm-3">&nbsp;</label>
							<div class="col-sm-9">
								<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn bg-warning">Update</button>
							</div>
						</div>
						<hr>
						<div class="form-group row">
							<label class="col-form-label col-sm-3">SMPP Original Count</label>
							<div class="col-sm-9">
								<div class="form-control-plaintext">100</div>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>