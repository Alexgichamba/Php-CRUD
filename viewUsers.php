<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>


</head>
<body>


    <a href="saveUser.php" class="btn btn-primary adlink fixed-bottom">add User</a>
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        /**
         * Created by PhpStorm.
         * User: alexn
         * Date: 11/06/2019
         * Time: 10:54
         */
        //Connect to the DB
        $conn = mysqli_connect("localhost", "root", "", "may_syst_2");
        //Check if the connection is successful
        if (!$conn){
            echo "Connection failed";
        }else{
            //Proceed to fetch data from the DB
            //Start by creating the select query
            $selectQuery = "SELECT * FROM `majina` WHERE 1 ";
            //Check if the select query is correct
            if (!$selectQuery){
                echo "Error on the select query";
            }else{
//                proceed to fetch data
                $fetch = mysqli_query($conn,$selectQuery);
                while($row = mysqli_fetch_assoc($fetch)){
                    extract($row);
                    echo "
                        <tr>
                            <td>$name</td>
                            <td>$email</td>
                            
                            <td>  
                            
                                                        
                                  <div class='container'>
                                  
                                  <!-- Trigger the modal with a button -->
                                  <button type='button'class='btn btn-danger btn-lg' data-toggle='modal' data-target='myModal'>Delete</button>
                                
                                  <!-- Modal -->
                                  <div class='modal fade' id='myModal' role='dialog'>
                                    <div class='modal-dialog modal-sm'>
                                      <div class='modal-content'>
                                        <div class='modal-header'>
                                          <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                          <h4 class='modal-title mdlttl'>Are you sure you want to delete?</h4>
                                        </div>
                                        <div class='modal-body'>
                                          <p>This is a small modal.</p>
                                        </div>
                                        <div class='modal-footer'>
                                          <button type='button' class='btn btn-default' data-dismiss='modal'>No
                                          <a href='delete.php?ID_yangu=$id' class='btn btn-danger'>Yes</a></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                                        
                            
                           </td> 
                            <td> <a href='update.php?id_yetu=$id&jina_yetu=$name&arafa_yetu=$email&pass_yetu=$siri' class='btn btn-primary'>Update</a> </td>
                        </tr>" ;
                    //The variable names used here are the column names in the DB
                }
            }
        }

        ?>
    </table>




</body>
</html>