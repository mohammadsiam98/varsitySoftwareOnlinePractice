<?php include 'connect.php'; ?>


<?php 

if(isset($_POST['submit']))
{
	
	// Normal Input //
    $InputName   =htmlspecialchars($_POST['InputName'], ENT_QUOTES);

    $InputEmail =htmlspecialchars($_POST['InputEmail'], ENT_QUOTES);

    $InputSubject =htmlspecialchars($_POST['InputSubject'], ENT_QUOTES);

   
   
	    $sql="INSERT INTO contact_form(InputName,InputEmail,InputSubject)VALUES
	    ('$InputName','$InputEmail','$InputSubject')";

	    ///echo $sql;

	    $result = $conn->query($sql);


 
	
	
	
   
   }



 ?>