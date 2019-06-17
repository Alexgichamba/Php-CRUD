<?php
/**
 * Created by PhpStorm.
 * User: alexn
 * Date: 11/06/2019
 * Time: 09:53
 */

if (isset($_GET['btn_save'])){
    $inputedName = $_GET['x'];
    $inputedEmail = $_GET['y'];
    $inputedPassword = $_GET['z'];

    //To save data connect to the DB
    $conn = mysqli_connect("localhost", "root", "", "may_syst_2");

    //Check if the connection was successful
    if(!$conn){
        echo "Connection failed";
    }else{
        //Proceed to save data
        //Start by creating the insert query
        $insertQuery = "INSERT INTO `majina`(`id`, `name`, `email`, `siri`) VALUES (null,'$inputedName','$inputedEmail','$inputedPassword')" ;

        //Check if the insert query is correct
        if (!$insertQuery){
            echo "Error on insert query";
        }else{
            //Proceed to finally write data on the Db
            $ingiza = mysqli_query($conn,$insertQuery);
            //Check if the data was saved successfully
            if (!$ingiza){
                echo "Saving failed";
            }else{
                echo "Saved successfully  ";
               // header('location:saveUser.php');
                echo "<a href = 'saveUser.php'>Add more people </a> ";
            }

        }
    }



}