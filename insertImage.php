<?php
include("connection.php");
if (isset($_FILES['image'])) {
	$file_name = $_FILES['image']['name'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$moveFile = move_uploaded_file($file_tmp, 'upload_images/'.$file_name);
	if ($moveFile==1) {
		$query = "INSERT INTO IMAGESTABLE (imagename) VALUES ('$file_name')";
		$data = mysqli_query($conn,$query);
		if ($data)
		{
			echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'><strong>Image Uploaded</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		}
		else
		{
			echo "<br>Image is not inserted";
		}
	}
	else
	{
		echo "No Upload";
	}

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Upload Image</title>
  </head>
  <body>
  	<center><h1>Upload Image</h1></center>
  	<a href="imageGallary.php"><button class="btn btn-primary" style="position:relative; left: 1000px;">Go to Image Gallary</button></a>
	<hr>
	<center>
  	<form accept="" method="POST" enctype="multipart/form-data">
		<input type="file" name="image" class="btn btn-warning"><br><br>
		<input type="submit" name="Submit" value="Upload" class="btn btn-primary">
	</form>
	</center>
	

  	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>