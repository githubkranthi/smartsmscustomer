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
			<a href="" class="btn bg-warning" title="Post Your Query"
				data-toggle="modal" data-target="#post_query_popup"> Post Your Query</a>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<table id="individual_table_list" class="table datatable-responsive">
			<thead>
				<tr>
					<th><input type="checkbox" id="checkall"> <label for="checkall">&nbsp;</label><br>
						<button type="button"
							class="btn btn-outline-danger approvedelete-btn">
							<i class="icon-cross2"></i> Delete All
						</button></th>
					<th>Sl.No.</th>
					<th>Ticket ID</th>
					<th>Query</th>
					<th>By User</th>
					<th>Responce</th>
					<th>View Ticket</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>1</td>
					<td>#123456</td>
					<td>Ahead of bilateral meet with PM Modi,</td>
					<td>Posted To: Praveen Jp</td>
					<td><span class="badge badge-pill badge-success">Completed</span> <span
						class="badge badge-pill badge-warning" style="display: none;">Pending</span>
					</td>
					<td><a href="" class="link"><i class="icon-file-eye"></i> View
							Ticket</a></td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						data-toggle="modal" data-target="#post_query_edit_popup"><i
							class="icon-pencil5" aria-hidden="true"></i></a> <a href=""
						class="badge badge-danger" title="Delete"><i class="icon-trash"
							aria-hidden="true"></i></a></td>
				</tr>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>1</td>
					<td>#123456</td>
					<td>Ahead of bilateral meet with PM Modi,</td>
					<td>Posted To: Praveen Jp</td>
					<td><span class="badge badge-pill badge-success">Completed</span> <span
						class="badge badge-pill badge-warning" style="display: none;">Pending</span>
					</td>
					<td><a href="" class="link"><i class="icon-file-eye"></i> View
							Ticket</a></td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						data-toggle="modal" data-target="#post_query_edit_popup"><i
							class="icon-pencil5" aria-hidden="true"></i></a> <a href=""
						class="badge badge-danger" title="Delete"><i class="icon-trash"
							aria-hidden="true"></i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<!-- Edit Post Your Query -->
<div id="post_query_edit_popup" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Your Query</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Query</label>
						<div class="col-sm-9">
							<textarea class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Files</label>
						<div class="col-sm-9">
							<input type="file" class="form-control">
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
<!-- /Edit Post Your Query -->

<!-- Post Your Query create -->
<div id="post_query_popup" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Post Your Query</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Query</label>
						<div class="col-sm-9">
							<textarea class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Files</label>
						<div class="col-sm-9">
							<input type="file" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn bg-warning">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Post Your Query -->

<script type="text/javascript">

	var table = $('#individual_table_list').DataTable();
	$('#checkall').change(function(){
    var cells = table.cells( ).nodes();
    	$( cells ).find(':checkbox').prop('checked', $(this).is(':checked'));
	});

</script>