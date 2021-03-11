<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>ContactForm Show</title>
</head>
<body>

	<?php 

$sql = "SELECT * FROM `contact_form` ORDER BY id DESC "; 
$result=$conn->query($sql); 

if ($result->num_rows > 0) {
    // output data of each row
    while($rows = $result->fetch_assoc())
    {
        
        ?>			
		



<h1><?php echo $rows['InputName'];?></h1>
<h1><?php echo $rows['InputEmail'];?></h1>
<h1><?php echo $rows['InputSubject'];?></h1>


<?php 
    }
}

else 
{
    echo "0 results";
}

?>

</body>
</html>