
<!-- Theme JS files -->
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/tables/datatables/datatables.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js'; ?>"></script>


<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/ui/moment/moment.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/pickers/daterangepicker.js'; ?>"></script>


<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/demo_pages/datatables_responsive.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/demo_pages/picker_date.js'; ?>"></script>
<!-- /theme JS files -->

<div class="row">
	<div class="col-lg-12">
		<div class="mb-2 float-right">
			<a href="" class="btn bg-warning" title="Add Mobile"
				data-toggle="modal" data-target="#bulk_mobile_no"><i
				class="icon-plus22"></i> Add Bulk</a> <a href=""
				class="btn bg-primary" title="Add Sender ID" data-toggle="modal"
				data-target="#add_mobile_no"><i class="icon-plus22"></i> Add</a>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<form class="form-inline">
			<input type="text" class="form-control mb-2 mr-sm-2" id=""
				placeholder="Email / Mobile"> <select
				class="form-control mb-2 mr-sm-2" id="">
				<option>---- Select Status ----</option>
				<option>Block</option>
				<option>Unblock</option>
			</select>
			<div class="input-group mb-2 mr-sm-2">
				<span class="input-group-prepend"> <span class="input-group-text"><i
						class="icon-calendar22"></i></span>
				</span> <input type="text" class="form-control daterange-single"
					value="" placeholder="From">
			</div>
			<div class="input-group mb-2 mr-sm-2">
				<span class="input-group-prepend"> <span class="input-group-text"><i
						class="icon-calendar22"></i></span>
				</span> <input type="text" class="form-control daterange-single"
					value="" placeholder="To">
			</div>
			<button type="submit" class="btn btn-secondary mb-2">Search</button>
		</form>
		<table id="block_unblock_table" class="table datatable-responsive">
			<thead>
				<tr>
					<th><input type="checkbox" id="checkall"> <label for="checkall">&nbsp;</label><br>
						<button type="button"
							class="btn btn-outline-success approvedelete-btn">
							<i class="icon-checkmark3"></i> Approve All
						</button>
						<button type="button"
							class="btn btn-outline-danger approvedelete-btn">
							<i class="icon-cross2"></i> Delete All
						</button></th>
					<th>Sl.No.</th>
					<th>Email / Mobile</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>Admin</td>
					<td>Praveen</td>
					<td>Praveenj</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						title="Add Sender ID" data-toggle="modal"
						data-target="#edit_numbers_data"><i class="icon-pencil5"
							aria-hidden="true"></i></a> <a href="" class="badge badge-danger"
						title="Delete"><i class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>Admin</td>
					<td>Praveen</td>
					<td>Praveenj</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						title="Add Sender ID" data-toggle="modal"
						data-target="#edit_numbers_data"><i class="icon-pencil5"
							aria-hidden="true"></i></a> <a href="" class="badge badge-danger"
						title="Delete"><i class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>Admin</td>
					<td>Praveen</td>
					<td>Praveenj</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						title="Add Sender ID" data-toggle="modal"
						data-target="#edit_numbers_data"><i class="icon-pencil5"
							aria-hidden="true"></i></a> <a href="" class="badge badge-danger"
						title="Delete"><i class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>Admin</td>
					<td>Praveen</td>
					<td>Praveenj</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						title="Add Sender ID" data-toggle="modal"
						data-target="#edit_numbers_data"><i class="icon-pencil5"
							aria-hidden="true"></i></a> <a href="" class="badge badge-danger"
						title="Delete"><i class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>Admin</td>
					<td>Praveen</td>
					<td>Praveenj</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						title="Add Sender ID" data-toggle="modal"
						data-target="#edit_numbers_data"><i class="icon-pencil5"
							aria-hidden="true"></i></a> <a href="" class="badge badge-danger"
						title="Delete"><i class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<!-- Add Mobile Numbers -->
<div id="add_mobile_no" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Mobile Numbers</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Add Numbers</label>
						<div class="col-sm-9">
							<textarea class="form-control"></textarea>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn bg-warning">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Mobile Numbers -->

<!-- Edit Mobile Number -->
<div id="edit_numbers_data" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Mobile Number</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Mobile Number</label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Status</label>
						<div class="col-sm-9">
							<select class="form-control mb-2 mr-sm-2" id="">
								<option>---- Select Status ----</option>
								<option>Block</option>
								<option>Unblock</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn bg-warning">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Mobile Number -->

<!-- Upload Bulk Mobile Numbers -->
<div id="bulk_mobile_no" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Upload Bulk Mobile Numbers</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Upload File</label>
						<div class="col-sm-9">
							<input type="file" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn bg-warning">Upload</button>
				</div>
				<hr>
				<div class="form-group text-center">
					<label class="col-form-label">Block List Template</label>
					<button type="submit" class="btn bg-success">Download</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Upload Bulk Mobile Numbers -->

<script type="text/javascript">

	var table = $('#block_unblock_table').DataTable();
	$('#checkall').change(function(){
    var cells = table.cells( ).nodes();
    	$( cells ).find(':checkbox').prop('checked', $(this).is(':checked'));
	});

</script>