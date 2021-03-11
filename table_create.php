<?php include 'connect.php'; ?>



<?php 



$sql="CREATE TABLE `blog`(
id int(11) not null AUTO_INCREMENT,
blog_header varchar(100) not null,
blog_details_thumbnail varchar(255) not null,
another_header varchar(100) not null,
briefly_describe_your_blog varchar(100) not null,
image varchar(250) not null,
CONSTRAINT id PRIMARY KEY (id)
)";


if($conn->query($sql)===TRUE)
{
echo "Successfully Created Database Table";
}
else
{
echo "Failed to Create Database";
}



/*
$sql="CREATE TABLE `contact_form`(
id int(11) not null AUTO_INCREMENT,
InputName varchar(100) not null,
InputEmail varchar(255) not null,
InputSubject text not null,
CONSTRAINT id PRIMARY KEY (id)
)";


if($conn->query($sql)===TRUE)
{
echo "Successfully Created Database Table";
}
else
{
echo "Failed to Create Database";
}
*/
?>
