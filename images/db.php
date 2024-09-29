<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','artexpo') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['emailaddress']))
        {
            $name = $_POST['name'];
            $email = $_POST['emailaddress'];
  

            $sql = "INSERT INTO userinfo (name, email)  VALUES ('$name','$email')";

          

            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successfull";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>