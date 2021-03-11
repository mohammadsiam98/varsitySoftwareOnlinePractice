<?php include 'connect.php'; ?>


<?php 

if(isset($_POST['submit']))
{
	
	// Normal Input //
    $blog_header   =htmlspecialchars($_POST['blog_header'], ENT_QUOTES);

    $blog_details_thumbnail =htmlspecialchars($_POST['blog_details_thumbnail'], ENT_QUOTES);

    $another_header =htmlspecialchars($_POST['another_header'], ENT_QUOTES);

    $briefly_describe_your_blog    =htmlspecialchars($_POST['briefly_describe_your_blog'],ENT_QUOTES);

   


  // Image Check
    $destination    = $_FILES['files']['name'];
	// get the image extension
	$extension = substr($destination,strlen($destination)-4,strlen($destination));
	// allowed extensions
	$allowed_extensions = array(".jpg","jpeg",".png",".gif",".svg");
	// Validation for allowed extensions .in_array() function searches an array for a specific value.
	if(!in_array($extension,$allowed_extensions))
	{
	    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
	}
	
	else
	{

		//rename the image file
		 
		 $filename       = $_FILES['files']['tmp_name'];    
	     $destination    = 'upload/'.time().$_FILES['files']['name'];    
	     $image = move_uploaded_file($filename, $destination);
	    

	    $sql="INSERT INTO blog(blog_header,image,blog_details_thumbnail,briefly_describe_your_blog,another_header,date)VALUES
	    ('$blog_header','$destination','$blog_details_thumbnail','$briefly_describe_your_blog','$another_header',NOW())";

	    ///echo $sql;

	    $result = $conn->query($sql);

	    ///echo 'successful';

	    if(!$result)
	    {
	        header('location: blog_upload_table.php');
	    }

	    else
	    {   
	    	
	        header('location: blog.php');
	    }

	}
   
   }



 ?>