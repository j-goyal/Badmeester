<?php

$showError = "";
$success = "false";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include '_dbconnect.php';

    $username = $_POST['username'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];


    $existSql = "SELECT * FROM `users` where `username` = '$username' ";
    $result = mysqli_query($conn, $existSql);
    $num = mysqli_num_rows($result);

    if($num == 0)
    {
        if(($password == $cpassword))
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `user_pass`) VALUES ('$username', '$hash')";
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
        $showError = "Username ( <b>$username</b> ) already existed. Try different username";
    }
    

    header("location: /capstone/index.php?signupsuccess=$success&error=$showError");
}

?>