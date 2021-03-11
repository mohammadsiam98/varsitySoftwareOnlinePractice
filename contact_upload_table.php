<?php include 'connect.php'; ?>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>


<h1 style="text-align: center;">blog content upload table </h1>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

<div class="container">
    <div class="row">
        <div class="col-md-12">

<form action="contact_upload_table_backend.php" method="post" enctype="multipart/form-data" style="margin-top: 10%;">

 <div class="form-group">
   <h3><label for="text">Enter Your Blog Header</label></h3>
   <input type="text" name="InputName" class="form-control" autocomplete="off">
 </div>

  <div class="form-group">
   <h3><label for="text">Enter Your another Blog Header</label></h3>
   <input type="text" name="InputEmail" class="form-control" autocomplete="off">
 </div>

  <div class="form-group">
   <h3><label for="text">Enter Your another Blog Header</label></h3>
   <input type="text" name="InputSubject" class="form-control" autocomplete="off">
 </div>



 



  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>

<style type="text/css">
  body{background-color: rgb(21, 32, 43);color: white;}
  .error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
</style>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script>
 CKEDITOR.replace( 'briefly_describe_your_blog', {
  height: 300,
 });
</script>