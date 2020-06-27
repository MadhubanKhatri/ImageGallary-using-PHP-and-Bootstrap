<?php
include("connection.php");
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Image Gallary</title>
  </head>
  <body>
    <center><h1>Image Gallary</h1></center>
    <hr style="background-color: black;">
    <a href="insertImage.php"><button class="btn btn-primary mx-2 my-1">Add Image</button></a>

    <?php
	$i = 1;
	while ($i <= 100)
	{
		
		$get_data_query = "SELECT IMAGENAME FROM IMAGESTABLE WHERE id=$i";
		$data = mysqli_query($conn,$get_data_query);
		$result = mysqli_fetch_assoc($data);
		$img_name = $result['IMAGENAME'];		
		$folder = "upload_images/".$img_name;
		if ($img_name!=NULL)
		{
			echo "<div class='container' style='display:inline;'>";
			echo "<div class='card' style='width: 18rem;'><img src='$folder' class='card-img-top'><div class='card-body'><p class='card-title'>$img_name</p><a href='deleteImage.php?Id_num=$i' class=btn btn-primary' style='background-color:#007BFF; color:white;'>Delete Image</a></div></div>";
			echo "</div>";
			
		}
		$i++;
			
	}
	?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>