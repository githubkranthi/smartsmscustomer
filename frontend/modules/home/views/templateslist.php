<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/tables/datatables/datatables.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/forms/selects/select2.min.js'; ?>"></script>

<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/ui/moment/moment.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/demo_pages/datatables_responsive.js'; ?>"></script>

<div class="row">
	<div class="col-lg-12">
		<div class="mb-2 float-right">
			<a href="" class="btn bg-primary" title="Add Sender ID"
				data-toggle="modal" data-target="#add_template"><i
				class="icon-plus22"></i> Add</a>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<form class="form-inline">
			<input type="text" class="form-control mb-2 mr-sm-2" id=""
				placeholder="Template Name"> <select
				class="form-control mb-2 mr-sm-2" id="">
				<option>---- Select Status ----</option>
				<option>Block</option>
				<option>Unblock</option>
			</select>

			<button type="submit" class="btn btn-secondary mb-2">Search</button>
		</form>
		<table id="template_table_list" class="table datatable-responsive">
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
					<th>Template Name</th>
					<th>Template</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>1</td>
					<td>Admin</td>
					<td><a href="" class="badge badge-success mb-1" title="View"
						title="Add Sender ID" data-toggle="modal"
						data-target="#view_template"><i class="icon-file-text2"
							aria-hidden="true"></i></a></td>
					<td>Active</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						title="Add Sender ID" data-toggle="modal"
						data-target="#edit_template_data"><i class="icon-pencil5"
							aria-hidden="true"></i></a> <a href="" class="badge badge-danger"
						title="Delete"><i class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>1</td>
					<td>Admin</td>
					<td><a href="" class="badge badge-success mb-1" title="View"
						title="Add Sender ID" data-toggle="modal"
						data-target="#view_template"><i class="icon-file-text2"
							aria-hidden="true"></i></a></td>
					<td>Active</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						title="Add Sender ID" data-toggle="modal"
						data-target="#edit_template_data"><i class="icon-pencil5"
							aria-hidden="true"></i></a> <a href="" class="badge badge-danger"
						title="Delete"><i class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<!-- Add Template Numbers -->
<div id="add_template" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Template</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Template Type</label>
						<div class="col-sm-9">
							<select class="form-control mb-2 mr-sm-2" id="">
								<option>---- Choose Template ----</option>
								<option>1</option>
								<option>2</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Template Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Template</label>
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
<!-- /Add Template Numbers -->

<!-- Edit Template -->
<div id="edit_template_data" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Template</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Template Type</label>
						<div class="col-sm-9">
							<select class="form-control mb-2 mr-sm-2" id="">
								<option>---- Choose Template ----</option>
								<option>1</option>
								<option>2</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Template Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Template</label>
						<div class="col-sm-9">
							<textarea class="form-control"></textarea>
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
<!-- /Edit Template -->

<!-- view template -->
<div id="view_template" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">View Template</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Template</label>
						<div class="col-sm-9">
							<textarea class="form-control"></textarea>
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
<!-- /view template -->

<script type="text/javascript">

	var table = $('#template_table_list').DataTable();
	$('#checkall').change(function(){
    var cells = table.cells( ).nodes();
    	$( cells ).find(':checkbox').prop('checked', $(this).is(':checked'));
	});

</script>