<?php

    $success = "false";
    $showError = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        include '_dbconnect.php';

        $phone = $_POST['loginphone'];
        $password = $_POST['loginpass'];

        $sql = "SELECT * FROM `hospital` WHERE `h_phone`= '$phone'";
        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            $row = mysqli_fetch_assoc($result);
        
            if(password_verify($password, $row['h_password']))
            {
                $success = "true";

                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['hosp_name'] = $row['h_name'];
                $_SESSION['h_id'] = $row['h_id'];

                
                header("location: /capstone/index.php?loginsuccess=$success");
            }

            else
            {
                $showError = "Invalid Credentials";
            } 
            
        }

        else
        {
            $showError = "Invalid Credentials";
        }
     
        header("location: /capstone/index.php?loginsuccess=$success&error=$showError");
    }

?>