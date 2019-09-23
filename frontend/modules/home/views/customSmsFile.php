
<!-- Theme JS files -->
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/tables/datatables/datatables.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/forms/selects/select2.min.js'; ?>"></script>

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
				data-toggle="modal" data-target="#uploads_customized_sms"><i
				class="icon-plus22"></i> Uploads</a>
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
		<table id="individual_table_list" class="table datatable-responsive">
			<thead>
				<tr>
					<th><input type="checkbox" id="checkall"> <label for="checkall">&nbsp;</label><br>
						<!-- <button type="button" class="btn btn-outline-success approvedelete-btn"><i class="icon-checkmark3"></i> Approve All</button> -->
						<button type="button"
							class="btn btn-outline-info approvedelete-btn">
							<i class="icon-file-download"></i> Download All
						</button>
						<button type="button"
							class="btn btn-outline-danger approvedelete-btn">
							<i class="icon-cross2"></i> Delete All
						</button></th>
					<th>Sl.No.</th>
					<th>File Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>1</td>
					<td><a href="" class="">Praveen Jp</a></td>
					<td><a href="" class="badge badge-info mb-1" title="Download"><i
							class="icon-file-download" aria-hidden="true"></i></a> <a href=""
						class="badge badge-danger" title="Delete"><i class="icon-trash"
							aria-hidden="true"></i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<!-- Customized SMS Upload -->
<div id="uploads_customized_sms" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Upload Customized SMS</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">File Name</label>
						<div class="col-sm-9">
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Upload File</label>
						<div class="col-sm-9">
							<input type="file" class="form-control"> <span
								class="form-text text-muted">* Please upload .csv/.txt files
								only</span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn bg-warning">Upload</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Customized SMS Upload -->

<script type="text/javascript">

	var table = $('#individual_table_list').DataTable();
	$('#checkall').change(function(){
    var cells = table.cells( ).nodes();
    	$( cells ).find(':checkbox').prop('checked', $(this).is(':checked'));
	});

</script>