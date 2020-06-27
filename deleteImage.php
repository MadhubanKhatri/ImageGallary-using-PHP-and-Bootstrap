<?php
include("connection.php");
$id_no = $_GET['Id_num'];
// echo $id_no;
$query = "DELETE FROM IMAGESTABLE WHERE id=$id_no";
$data = mysqli_query($conn,$query);
if ($data)
{
	header("location:imageGallary.php");
}
else
{
	echo "Can not be Deleted";
}

?>