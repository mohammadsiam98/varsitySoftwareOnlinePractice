<?php include 'connect.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 
</head>
<body>


	<h3 style="text-align: center;">Update Contact Form Details</h3>
	<div class="container">	
			<div class="row">		
				<div class="col-md-9">
				

				
					<form action="contact_form_edit_table_backend.php" class="mt-2 mb-2" method="POST" enctype="multipart/form-data">
						

						<?php 	
							$id = $_GET['id'];	
							$sqlClients = "SELECT * FROM `contact_form` WHERE id = '$id'";
							$resultClients = $conn->query($sqlClients);
							$rowsBannerData = mysqli_fetch_assoc($resultClients)
						?>

						<input type="hidden" name="id" value="<?php echo $rowsBannerData['id']; ?>">
                       

						<div class="form-group">
							<label for="image">Input Name </label>
							<input type="text" name="InputName" class="form-control" autocomplete="off" value="<?php echo $rowsBannerData['InputName']; ?>">
						</div>




						<div class="form-group">
							<label for="image">Input Email </label>
							<input type="text" name="InputEmail" class="form-control" autocomplete="off" value="<?php echo $rowsBannerData['InputEmail']; ?>">
						</div>




						<div class="form-group">
							<label for="image">Input Subject</label>
							<input type="text" name="InputSubject" class="form-control" autocomplete="off" value="<?php echo $rowsBannerData['InputSubject']; ?>">
						</div>




						 <button type="submit" name="update" class="btn btn-primary">Submit</button>

					</form>

				</div>
			</div>	
		</div>
<script src="https://kit.fontawesome.com/abce841807.js" crossorigin="anonymous"></script>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
		