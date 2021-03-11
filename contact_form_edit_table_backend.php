<?php 	
		
		include('connect.php');

		

		if (isset($_POST['update'])) {

			$id = $_POST['id'];
			
			$InputName = $_POST['InputName'];
			$InputEmail = $_POST['InputEmail'];	
	        $InputSubject= $_POST['InputSubject'];		
	
           
		
				$sqlBannerUpdate = "UPDATE `contact_form` SET InputName = '$InputName',InputEmail = '$InputEmail',InputSubject = '$InputSubject' WHERE id = '$id'";
			
			$resultUpdateBanner = $conn->query($sqlBannerUpdate);

			if (!$resultUpdateBanner) {
				echo "failed to update data";
			} else {
				header('Location: contact_form_dashboard.php');			
			}
		
		}
	
		
?>