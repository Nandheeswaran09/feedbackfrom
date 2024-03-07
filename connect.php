<?php
    $email = $_POST['email'];
    $pasword=$_POST['password'];
    $about=$_POST['about'];

    //DATABASE CONNECTION
    $conn=new mysqli('localhost','root','','test01');
    if($conn->connect_error){
        die('CONNECTION FAILED:'.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into table(username,password,about)
        values(?,?,?)");
        $stmt->bind_param("sss",$email,$password,$about);
        $stmt->execute();
        echo "THANK YOU FOR TIME.....";
        $stmt->close();
        $conn->close();
    }
?>