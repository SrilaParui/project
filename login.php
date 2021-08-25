<?php
    include "connection.php";
    if(isset($_POST))
    {
        $id=$_POST['username'];
        $psw=$_POST['password']; 
        $sql="select email from teacher where email='$id' and password='$psw'";
        $result=$conn->query($sql);
        echo $id;
        echo $psw;
        echo $result->num_rows;
        if($result->num_rows==1)
        {
            echo $id;
            session_start();
            $_SESSION['id']=$id;
            header("location:home.php?id=". $id);
        }

    }
    
?>