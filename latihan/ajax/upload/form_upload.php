<html>
<head>
	<title>Upload File</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					Select image to upload :
				</td>
				<td>
					<input type="file" name="file_upload" id="fileToUpload">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Upload Image" name="submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>