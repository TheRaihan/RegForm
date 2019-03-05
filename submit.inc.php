<?php
if(isset($_POST['Submit']) )
{
    require 'dbh.inc.php';
    
    $username = $_POST['Name'];
    $Phone = $_POST['Phn'];
    $email = $_POST['mail'];
    $Age = $_POST['Age'];

    $sql = "SELECT Name FROM Info WHERE NAME=$username";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("Location: ../submit.inc.php?error=sqlerror");
        exit();
    }
    else{
        $sql = "INSERT INTO Info(Name,PhoneNo,Email,Age) Values ($username,$Phone,$email,$Age)";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_execute($conn);
        header("Location: ./submit.php");
        exit();
    }
}
else
{
    header("Location: ../index.php");
    exit();
}
