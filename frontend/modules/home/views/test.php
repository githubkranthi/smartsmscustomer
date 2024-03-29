<!-- https://www.geeksforgeeks.org/how-to-upload-files-asynchronously-using-jquery/ -->
<!DOCTYPE html>
<html>
<head>
<title>Async file upload with jQuery</title>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
	</script>
</head>

<body>
	<div align="center">
		<form method="post" action="" enctype="multipart/form-data"
			id="myform">

			<div>
				<input type="file" id="file" name="file" /> <input type="button"
					class="button" value="Upload" id="but_upload">
			</div>
		</form>
	</div>

	<script type="text/javascript"> 
		$(document).ready(function() { 
			$("#but_upload").click(function() { 
				var fd = new FormData(); 
				var files = $('#file')[0].files[0];
				fd.append('file', files); 
				console.log('file data : '+JSON.stringify(fd));
				/*$.ajax({ 
					url: 'upload.php', 
					type: 'post', 
					data: fd, 
					contentType: false, 
					processData: false, 
					success: function(response){ 
						if(response != 0){ 
						alert('file uploaded'); 
						} 
						else{ 
							alert('file not uploaded'); 
						} 
					}, 
				});*/ 
			}); 
		}); 
	</script>
</body>

</html>
