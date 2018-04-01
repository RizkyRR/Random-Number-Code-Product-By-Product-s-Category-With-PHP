<?php  
	if (isset($_POST['Submit'])) 
	{
		$nprod 			= $_POST['nameprod'];

		$location_file 	= $_FILES['foto']['tmp_name'];
		$type_file   	= $_FILES['foto']['type'];
		$name_file   	= $_FILES['foto']['name'];
		$directory   	= "image/".$name_file;

		$catg 			= $_POST['cat'];
		$desc 			= $_POST['desc'];

		if (!empty($location_file)) 
		{
			include_once 'connect.php';

			move_uploaded_file($location_file, $directory);

			$getcode = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM tables ORDER BY table_id DESC"));
			$code 	 = $getcode['table_id']+rand(10, 999);

			switch ($catg) {
				case '1':
					echo $codex = "LPTP-".$code;
					break;

				case '2':
					echo $codex = "SMTP-".$code;
					break;

				case '3':
					echo $codex = "CMRA-".$code;
					break;

				default:
					echo $codex = "ACSR-".$code;
					break;
			}

			$sql = mysqli_query($mysqli, "INSERT INTO tables(table_id, name_product, foto_product, category, description) VALUES('$codex','$nprod','$name_file','$catg','$desc')");

			if (!$sql) {
				
				echo "<script>alert('Data still empty !')</script>";	
				echo "<meta http-equiv='refresh' content='0;index.php'>";
			}else{

				echo "<meta http-equiv='refresh' content='0;index.php'>";
			}
		}
		else
		{
			echo "<script>alert('Cannot saving your product !')</script>";
			echo "<meta http-equiv='refresh' content='0;index.php'>";
		}
	}
?>