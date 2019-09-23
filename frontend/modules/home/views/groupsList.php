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
			<a href="" class="btn bg-warning" title="Add Mobile"
				data-toggle="modal" data-target="#upload_bulk_group"><i
				class="icon-plus22"></i> Add Bulk</a> <a href=""
				class="btn bg-primary" title="Add Sender ID" data-toggle="modal"
				data-target="#create_group_name"><i class="icon-plus22"></i> Add</a>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<!-- <form class="form-inline">
						  <input type="text" class="form-control mb-2 mr-sm-2" id="" placeholder="Group Name">
						  <select class="form-control mb-2 mr-sm-2" id="">
						  	<option>---- Select Status ----</option>
						  	<option>Block</option>
						  	<option>Unblock</option>
						  </select>
						  
						  <button type="submit" class="btn btn-secondary mb-2">Search</button>
						</form> -->
		<table id="groups_table_list" class="table datatable-responsive">
			<thead>
				<tr>
					<th><input type="checkbox" id="checkall"> <label for="checkall">&nbsp;</label><br>
						<!-- <button type="button" class="btn btn-outline-success approvedelete-btn"><i class="icon-checkmark3"></i> Approve All</button> -->
						<button type="button"
							class="btn btn-outline-info approvedelete-btn">
							<i class="icon-file-download"></i> Download All Groups
						</button>
						<button type="button"
							class="btn btn-outline-danger approvedelete-btn">
							<i class="icon-cross2"></i> Delete All
						</button></th>
					<th>Sl.No.</th>
					<th>Group Name</th>
					<th>Mobile No.</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>1</td>
					<td><a href="group_view_list.html" class="badge badge-primary">Group1</a></td>
					<td>xxxxx xxxxx</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						data-toggle="modal" data-target="#groupview_edit"><i
							class="icon-pencil5" aria-hidden="true"></i></a> <a href=""
						class="badge badge-dark" title="Downlaod"><i
							class="icon-file-download2" aria-hidden="true"></i></a> <a
						href="" class="badge badge-danger" title="Delete"><i
							class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>1</td>
					<td><a href="group_view_list.html" class="badge badge-primary">Group1</a></td>
					<td>xxxxx xxxxx</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						data-toggle="modal" data-target="#groupview_edit"><i
							class="icon-pencil5" aria-hidden="true"></i></a> <a href=""
						class="badge badge-dark" title="Downlaod"><i
							class="icon-file-download2" aria-hidden="true"></i></a> <a
						href="" class="badge badge-danger" title="Delete"><i
							class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<!-- Create group name -->
<div id="create_group_name" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Create Group</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Group Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Contacts</label>
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
<!-- /Create group name -->

<!-- Edit Group View -->
<div id="groupview_edit" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Group Name</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Mobile Number</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" />
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
<!-- /Edit Group View -->

<!-- Bulk group create -->
<div id="upload_bulk_group" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Bulk Group</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Group Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Upload File</label>
						<div class="col-sm-9">
							<input type="file" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn bg-warning">Update</button>
				</div>
				<hr>
				<div class="form-group text-center">
					<label class="col-form-label">Group Template</label>
					<button type="submit" class="btn bg-success">Download</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /view template -->

<script type="text/javascript">

	var table = $('#groups_table_list').DataTable();
	$('#checkall').change(function(){
    var cells = table.cells( ).nodes();
    	$( cells ).find(':checkbox').prop('checked', $(this).is(':checked'));
	});

</script>