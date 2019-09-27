<?php
use yii\helpers\Url as URL;
?>
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
			<a href="" class="btn bg-warning" title="Add Sender ID"
				data-toggle="modal" data-target="#bulk_sender_id"><i
				class="icon-plus22"></i> Add Bulk</a> <a href=""
				class="btn bg-primary" title="Add Sender ID" data-toggle="modal"
				data-target="#add_sender_id" id="add_senderid"
				onClick="showSenderIdForm('newsenderid')"><i class="icon-plus22"></i>
				Add</a>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<form class="form-inline">
			<input type="text" class="form-control mb-2 mr-sm-2" id=""
				placeholder="Sender ID"> <select class="form-control mb-2 mr-sm-2"
				id="">
				<option>---- Select Status ----</option>
				<option>Approved</option>
				<option>Not Approved</option>
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
		<table id="sender_id_table" class="table datatable-responsive">
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
					<th>Sender ID</th>
					<th>Status</th>
					<th>Comments</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox" class="checkbox1" /></td>
					<td>Admin</td>
					<td>Praveen</td>
					<td>Praveenj</td>
					<td>There are a couple mistakes in the jQuery example I posted,</td>
					<td><a href="" class="badge badge-info mb-1" title="Edit"
						title="Add Sender ID" data-toggle="modal"
						data-target="#edit_sender_id"><i class="icon-pencil5"
							aria-hidden="true"></i></a> <a href="" class="badge badge-danger"
						title="Delete"><i class="icon-trash" aria-hidden="true"></i></a></td>
				</tr>

			</tbody>
		</table>
	</div>
</div>


<!-- Add Sender ID -->
<div id="add_sender_id" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Sender ID</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal" method="post"
				id="new_sender_id">
				<span id='success_senderid'></span>
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Sender ID</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="senderid"
								name="senderid" value="" maxlength="6" />
						</div>
						<span id="err_senderid"></span>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Comments</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="comments" name="comments"
								maxlength="2000"></textarea>
						</div>
						<span id="err_comments"></span>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" id="clear_senderid"
						name="clear_senderid" onClick="showSenderIdForm('newsenderid')">Clear</button>
					<button type="button" class="btn bg-success" id="create_senderid"
						name="create_senderid" onClick="saveSenderId()">Create</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Sender ID -->

<!-- Edit Sender ID -->
<div id="edit_sender_id" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Sender ID</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Sender ID</label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-sm-3">Comments</label>
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
<!-- /Edit Sender ID -->

<!-- Bulk Sender ID -->
<div id="bulk_sender_id" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Upload Sender ID Sheet</h5>
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
					<label class="col-form-label">Sender ID Template</label>
					<button type="button" class="btn bg-success"
						id="download_senderid_template" name="download_senderid_template"
						onClick="downloadTemplate()">Download</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Bulk Sender ID -->
<script type="text/javascript">

	var table = $('#sender_id_table').DataTable();

	$('#checkall').change(function(){
    var cells = table.cells( ).nodes();
    	$( cells ).find(':checkbox').prop('checked', $(this).is(':checked'));
	});


</script>

<script type="text/javascript">
 function saveSenderId(){
	   var objInputs = {};
	   objInputs = {
			   action : 'newsenderid',
			   senderid : $("#senderid").val(),
			   comments : $("#comments").val(),
			   category_type : 'sms',
			   };
	   console.log('Inputs : '+JSON.stringify(objInputs));

	   $.post('<?php echo URL::base(TRUE)."/home"; ?>',objInputs,function(response){
		   
		   clearErrors(objInputs.action);
		   let objResponse = $.parseJSON(response);
		   if('fail' == objResponse.type && 406 == objResponse.code){
			        if(objResponse.hasOwnProperty('data')){
                          //senderids
			        	if (undefined != objResponse.data.senderids && objResponse.data.senderids.length > 0) {
                               $("#err_senderid").html(objResponse.data.senderids);
                        }
			   }
		   }else if('success' == objResponse.type && 200 == objResponse.code){
			   clearInputs(objInputs.action);
                   $("#success_senderid").html(objResponse.message);
			   }
      });
	 }

   function clearErrors(action){
	   switch(action) {
	   case 'newsenderid':
		  $('#success_senderid').html('');
	      $('#err_senderid').html('');
	     break;
	  
	 }
	   return true;
	   }

   function clearInputs(action){
	   switch(action) {
	   case 'newsenderid':
	      $('#senderid').val('');
	      $('#comments').val('');
	     break;
	  
	 }     
	   return true;
   }

   function showSenderIdForm(action){
	   switch(action) {
	   case 'newsenderid':
		  $('#success_senderid').html('');
	      $('#senderid').val('');
	      $('#comments').val('');
	      $('#err_senderid').html('');
	      $('#err_comments').html('');
	     break;
	  
	 }     
	   return true;
	   }

   function downloadTemplate(){
	   let strUrl = "<?php echo Yii::getAlias('@web').'/assets/uploads/templates/sender_id.xlsx'; ?>";
	    window.location.href = strUrl;
	    return true;
	   }
</script>