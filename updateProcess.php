<?php
/**
 * Created by PhpStorm.
 * User: alexn
 * Date: 12/06/2019
 * Time: 10:33
 */

if(isset($_POST['btn_update'])){
    $received_id = $_POST['x'];
    $received_name = $_POST['y'];
    $received_email = $_POST['z'];
    $received_pass = $_POST['pwd'];


    //Connect to the DB
    $conn = mysqli_connect("localhost", "root", "", "may_syst_2");
    //Check if the connection is successful
    if(!$conn){
        echo "Connection failed";
    }else{
        //Proceed to update the database
        //Start by creating the update query
        $updateQuery = "UPDATE majina SET name='$received_name',email = '$received_email',siri = '$received_pass' WHERE id='$received_id' ";
        //Check if the query is correct
        if (!$updateQuery){
            echo "Error on the update query";
        }else{
            //Proceed to finally update
            $update = mysqli_query($conn,$updateQuery);
            //Check if the update was successful
            if(!$update){
                echo "Updating failed";
            }else{
                echo "Record updated successfully";
                header('location:viewUsers.php');
            }
        }
    }
}

?>