<?php
use yii\helpers\Url as URL;
?>
<!-- SenderID :: START -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pop-center" id="exampleModalLabel">Create
					SenderId</h5>
			</div>
			<div class="modal-body">
				<form id="form_sender_id">
					<span id="senderid_success"></span> <span id="senderid_fail"></span>
					<div class="form-group">
						<label for="senderid" class="col-form-label">SenderID</label> <input
							type="text" class="form-control" name="senderid" id="senderid"
							value="" /> <span id="err_sender_id"></span>
					</div>
					<div class="form-group">
						<label for="senderid_comments" class="col-form-label">Comments</label>
						<textarea class="form-control comment-area"
							name="senderid_comments" id="senderid_comments"></textarea>
						<span id="err_comments"></span>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary"
					id="btn_create_senderid" onclick="saveSenderId()">Create</button>
			</div>
		</div>
	</div>
</div>
<!-- SenderID :: END -->

<!-- Email :: START -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pop-center" id="exampleModalLabel">Create
					Subject</h5>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Subject</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Subject:</label>
						<textarea class="form-control comment-area" id="message-text"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Create Mail Sender ID</button>
			</div>
		</div>
	</div>
</div>
<!-- Email :: END -->

<script type="text/javascript">

   function saveSenderId(){
	   
	   var objInputs = {
    		   action : 'newsenderid',
    		   category_type: 'sms',
			   senderids : $("#senderid").val(),
			   comments : $("#senderid_comments").val() 
			   };
	   
	   $.post('<?php echo URL::base(TRUE)."/home/home/home"; ?>',objInputs,function(response){
		   enableActions(objInputs.action);
		   makeEmpty(objInputs.action);
		    console.log('Response : '+response);
		    var response = $.parseJSON(response);
		    console.log(response);
		      if(400 == response.code){
			      //senderids
			      if(response.data.hasOwnProperty('senderids')){
		              $("#err_sender_id").html(response.data.senderids);
				  } 

				  //comments
			      if(response.data.hasOwnProperty('comments')){
		              $("#err_comments").html(response.data.comments);
				  }
			  }else if(200 == response.code){
				  makeFieldsEmpty(objInputs.action);
				  $("#senderid_success").html(response.message);
				}
		      enableActions('after_'+objInputs.action);
		   });
	   }

   function makeEmpty(strAction){
	   switch (strAction) {
    	   case 'newsenderid':
        	  $("#senderid_fail").html('');
        	  $("#senderid_success").html('');
    	      $("#err_sender_id").html('');
    	      $("#err_comments").html('');
    	      break;	   
	  }
	  return true;   
	}

	function makeFieldsEmpty(strAction){
		 switch (strAction) {
          	   case 'newsenderid':
              	  $("#senderid").val('');
              	  $("#senderid_comments").val('');
          	      break;	   
	     } 
	  return true;
		}

	
function enableActions(strAction){
	 switch (strAction) {
	   case 'newsenderid':
    	  $("#btn_create_senderid").attr("disabled",true);
	      break;
	   case 'after_newsenderid':
	    	  $("#btn_create_senderid").attr("disabled",false);
		      break;	   
	  }
	return true;
}
   function saveSubject(){
	   
	   }

   

</script>