<?php

$showError = "";
$success = "false";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include '_dbconnect.php';

    $h_name = $_POST['h_name'];
    $h_address = $_POST['h_address'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];


    $existSql = "SELECT * FROM `hospital` where `h_phone` = '$phone' ";
    $result = mysqli_query($conn, $existSql);
    $num = mysqli_num_rows($result);

    if($num == 0)
    {
        if(($password == $cpassword))
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `hospital` (`h_name`, `h_address`, `h_phone`, `h_password`) VALUES ('$h_name', '$h_address', '$phone', '$hash')";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                $success = "true";
                header("location: /capstone/index.php?signupsuccess=$success");
                exit;
            }
        }

        else
        {
            $showError = "Password do not match. Kindly check your password";
            
        }
            
    }
     

    else
    {
        $showError = "Account already Registered. Please Login to continue";
    }
    

    header("location: /capstone/index.php?signupsuccess=$success&error=$showError");
}

?>