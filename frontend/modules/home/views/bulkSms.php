<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::getAlias('@web').'/assets/css/bootstrap-clockpicker.min.css'; ?>">


<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/forms/selects/select2.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/ui/moment/moment.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/pickers/daterangepicker.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/clockpicker/jquery-clockpicker.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/demo_pages/form_select2.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/demo_pages/picker_date.js'; ?>"></script>
<div class="row">
	<div class="col-lg-12">
		<div class="mb-2 float-right">
			<a href="" class="btn bg-primary" title="Choose Templete / Group"
				data-toggle="modal" data-target="#choose_templ_group">Select
				Templete / Groups</a>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<form>
			<div class="form-group row">
				<label class="col-form-label col-sm-3">Sender ID</label>
				<div class="col-sm-9">
					<select class="form-control select-search">
						<option>SM12345</option>
						<option>JK3456</option>
						<option>ID6543</option>
						<option>GT123</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-form-label col-sm-3">Mobile</label>
				<div class="col-sm-7">
					<textarea class="form-control" style="height: 100px;"></textarea>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-warning">Mobile Count - 10</button>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-form-label col-sm-3">Message</label>
				<div class="col-sm-9">
					<textarea class="form-control" style="height: 100px;"></textarea>
					<span class="form-text text-muted">* Don't Copy &amp; Paste content
						from word file or from email</span>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-form-label col-sm-3">Uni code Message</label>
				<div class="col-sm-1">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input"
							id="uncode_lable"> <label class="custom-control-label"
							for="uncode_lable">&nbsp;</label>
					</div>
				</div>
				<div class="col-sm-5">
					<div id="show_uni_laung" style="display: none">
						<select class="form-control select-search">
							<option>Telugu</option>
							<option>English</option>
							<option>Hindi</option>
							<option>Tamil</option>
						</select>
					</div>
				</div>
				<div class="col-sm-3 text-right">
					<span><strong>4</strong> Characters. <strong>1</strong> Credits.</span>
					<button class="btn btn-light">Clear</button>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-form-label col-sm-3">Flash Message</label>
				<div class="col-sm-1">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="flashmsg">
						<label class="custom-control-label" for="flashmsg">&nbsp;</label>
					</div>
				</div>
				<div class="col-sm-8 text-right">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input"
							id="alowdunumbers"> <label class="custom-control-label"
							for="alowdunumbers">Allow Duplicates Numbers</label>
					</div>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-form-label col-sm-3">Set Schedule</label>
				<div class="col-sm-1">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input"
							id="setschedule"> <label class="custom-control-label"
							for="setschedule">&nbsp;</label>
					</div>
				</div>

				<div class="col-sm-8">
					<div id="show_date_time" style="display: none">
						<div class="row">
							<div class="col-sm-6">
								<div class="input-group mb-2 mr-sm-2">
									<span class="input-group-prepend"> <span
										class="input-group-text"><i class="icon-calendar22"></i></span>
									</span> <input type="text"
										class="form-control daterange-single" value=""
										placeholder="From">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="input-group clockpicker">
									<input type="text" class="form-control" value="09:30"> <span
										class="input-group-addon"> <span
										class="glyphicon glyphicon-time"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="form-group row mb-0">
				<div class="col-lg-9 ml-lg-auto">
					<!--  <button type="submit" class="btn btn-light">Cancel</button> -->
					<button type="submit" class="btn bg-blue ml-3">Create</button>
				</div>
			</div>
		</form>
	</div>
</div>


<!-- Select Templete / Groups -->
<div id="choose_templ_group" class="modal fade model-templ-group"
	tabindex="-1">
	<div class="modal-dialog modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Templates / Groups</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="d-md-flex">
						<ul
							class="nav nav-tabs nav-tabs-vertical flex-column mr-md-3 wmin-md-200 mb-md-0 border-bottom-0">
							<li class="nav-item"><a href="#template_tab"
								class="nav-link active" data-toggle="tab"> Template</a></li>
							<li class="nav-item"><a href="#groups_tab" class="nav-link"
								data-toggle="tab"> Groups</a></li>
						</ul>
						<div class="tab-content" style="width: 100%;">
							<div class="tab-pane fade show active" id="template_tab">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td><a href="">Code snippet</a></td>
											<td><a href="" title="Edit" data-toggle="modal"
												data-target="#edit_template_name"><i class="icon-pencil5"
													aria-hidden="true"></i></a> <a href=""
												class="m-1 text-danger" title="Delete"><i class="icon-trash"
													aria-hidden="true"></i></a></td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td><a href="">PM Modi Has Birthday Lunch With Mother, Seeks
													Her Blessing</a></td>
											<td><a href="" title="Edit" data-toggle="modal"
												data-target="#edit_template_name"><i class="icon-pencil5"
													aria-hidden="true"></i></a> <a href=""
												class="m-1 text-danger" title="Delete"><i class="icon-trash"
													aria-hidden="true"></i></a></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="tab-pane fade" id="groups_tab">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input"
														id="customCheck1"> <label class="custom-control-label"
														for="customCheck1">Check this custom checkbox <strong>(1000)</strong></label>
												</div>
											</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input"
														id="customCheck2"> <label class="custom-control-label"
														for="customCheck2">Check this custom checkbox <strong>(1000)</strong></label>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Select Templete / Groups -->

<!-- Customized SMS Upload -->
<div id="edit_template_name" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Update Template</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<form action="#" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Update Template</label>
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
<!-- /Customized SMS Upload -->



<script type="text/javascript">
	$(function() {

		$("#uncode_lable").click(function () {
            if ($(this).is(":checked")) {
                $("#show_uni_laung").show();
            } else {
                $("#show_uni_laung").hide();
            }
        });
        
        $("#setschedule").click(function () {
            if ($(this).is(":checked")) {
                $("#show_date_time").show();
            } else {
                $("#show_date_time").hide();
            }
        });

        //Clock Picker
        $('.clockpicker').clockpicker({
        	'default': 'now',
		    vibrate: true,
		    placement: "top",
		    align: "left",
		    autoclose: true,
		    twelvehour: true
        });
    });
</script>