<?php 
include 'connect.php';


		if (isset($_GET['id'])) {	
	
           $delete=$_GET['id'];

           echo "siam";
		
				$sqlBannerUpdate = "DELETE FROM contact_form WHERE id='$delete' ";
			
			$resultUpdateBanner = $conn->query($sqlBannerUpdate);

			if (!$resultUpdateBanner) 
			{
				echo "failed to update data";
			}
			 else 
			 {
				header('Location: contact_form_dashboard.php');			
			}
		}
 ?>