<?php
/**
 * Created by PhpStorm.
 * User: alexn
 * Date: 12/06/2019
 * Time: 10:03
 */

//DB
$conn = mysqli_connect("localhost", "root", "", "may_syst_2");

//Check if the connection was successful
if (!$conn){
    echo "connection failed";
}else{
    //Proceed by deleting
    //Start by checking if the delete has been clicked

    if (isset($_GET['ID_yangu'])){
        $received_id = $_GET['ID_yangu'];
        //Create the delete query

        $delete_query = "DELETE FROM majina WHERE id=$received_id";

        //Complete by finally deleting
        $delete = mysqli_query($conn,$delete_query);

        //Check if the deletion was successful

        if (!$delete){
            echo "Deleting failed";
        }else{
            echo "Record deleted successfully";
            header('location:viewUsers.php');
        }


    }
}

