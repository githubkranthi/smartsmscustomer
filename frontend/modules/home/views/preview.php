
<!-- Theme JS files -->
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/tables/datatables/datatables.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/plugins/forms/selects/select2.min.js'; ?>"></script>
<script
	src="<?php echo Yii::getAlias('@web').'/assets/global_assets/js/demo_pages/datatables_basic.js'; ?>"></script>
<!-- /theme JS files -->

<div class="card">
	<div class="card-body">
		<table id="bul_custom_sms_list" class="table datatable-basic">
			<thead>
				<tr>
					<th>Mobile</th>
					<th>Message</th>
					<th>Credits</th>
					<th>Message</th>
					<th>Credits</th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>9848022338</td>
					<td>PM Modi Has Birthday Lunch With Mother, Seeks Her Blessing</td>
					<td>100</td>
					<td>PM Modi Has Birthday Lunch With Mother, Seeks Her Blessing</td>
					<td>100</td>
				</tr>
				<tr>
					<td>9848022338</td>
					<td>PM Modi Has Birthday Lunch With Mother, Seeks Her Blessing</td>
					<td>100</td>
					<td>PM Modi Has Birthday Lunch With Mother, Seeks Her Blessing</td>
					<td>100</td>
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			<a href="" class="btn bg-warning ml-3">Back</a>
			<button type="submit" class="btn bg-success ml-3">Send</button>
		</div>
	</div>

</div>


<script type="text/javascript">
	$('#bul_custom_sms_list').dataTable();		
</script>