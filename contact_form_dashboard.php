<?php 
    include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/abce841807.js" crossorigin="anonymous"></script>
</head>




<body>
    
<h1 style="text-align: center;">Form Page</h1>
        <div class="container-fluid"> 
            <div class="row">   
              
                <div class="col-md-12">
                    <div class="row"> 
                        <a href="contact_upload_table.php" class="btn btn-primary mt-2 mb-2" style="text-align: center;"> Add New Post </a>
                    </div>

                    <div class="row">   
                        <table class="table table-hover table-bordered">   
                            <thead>
                                <th>ID</th>
                                <th style="text-align: center;">InputName</th>
                                <th style="text-align: center;">InputEmail</th>
                                <th style="text-align: center;">InputSubject</th>
                                

                                <th style="text-align: center;">Edit</th>
                                <th style="text-align: center;">Delete</th>
                            </thead>    
                            <tbody> 

                                <?php   
                                    $sqlClients = "SELECT * FROM `contact_form` ";
                                    $resultClients = $conn->query($sqlClients);
                                ?> 




                               




                                <?php   while($rowsBannerData = mysqli_fetch_assoc($resultClients)) { ?>
                                <tr>    
                                    <td style="text-align: center;"> 
                                      <?php  echo $rowsBannerData['id']; ?> 
                                    </td>
                                    
                                   

                                     <td style="text-align: center;"> 
                                      <?php  echo $rowsBannerData['InputName']; ?> 
                                    </td>
                                     <td style="text-align: center;"> 
                                      <?php  echo $rowsBannerData['InputEmail']; ?> 
                                    </td>
                                      <td style="text-align: center;"> 
                                      <?php  echo $rowsBannerData['InputSubject']; ?> 
                                    </td>
                                  

                                     <td style="text-align: center;"">
                                       <a href="contact_form_edit_table.php?id=<?php echo $rowsBannerData['id']; ?>" 
                                       	class="btn btn-primary btn-sm">  <i class="far fa-edit">Edit</i>  </a> 
                                     </td>
                                       
                                     <td style="text-align: center;">
                                          <a href="contact_form_delete.php?id=<?php echo $rowsBannerData['id']; ?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt">Delete</i> </a>   

                                     </td>
                                       
                                       
                                    </td>
                                </tr>

                            <?php  } ?>
                                        






                            </tbody>    
                        </table>
                    </div>


                </div>
            </div>  
        </div>


         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>