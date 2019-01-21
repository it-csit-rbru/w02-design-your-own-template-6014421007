<?php

    if(isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['password'])){
        require '../includes/connect_db.php';
        $password_hash = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $signup = 'INSERT INTO users(email,password,firstname,lastname,time_register,status) 
        VALUE ("'.$_POST['email'].'","'.$password_hash.'","'.$_POST['fname'].'","'.$_POST['lname'].'","'.date('Y-m-d').'","m11")';
        if ($connect->query($signup) === TRUE) {
            header("location:../login.php");
        } else {
            echo "Error: " . $signup . "<br>" . $connect->error;
        }
        
        $connect->close();
    }else{
        echo 'error';
    }