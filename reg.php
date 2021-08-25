<?php
    include "connection.php";
    if(isset($_POST))
    {
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $add=$_POST['add'];
        $inst=$_POST['inst'];
        $dob=$_POST['dob']; 
        $dept=$_POST['dept']; 
        $id=$_POST['email'];
        $psw=$_POST['password'];
        if(isset($_POST['r1']))
        {
            $r=$_POST['r1'];

        }
        else
        {
            $r=$_POST['r2'];
        }
        
        echo  $id.", ".$psw.", ".$f_name.", ".$l_name.", ".$add.", ".$inst.", ".$dob.", ".$dept.", ".$r;
        $sql="select * from teacher where email='$id'";
        $result=$conn->query($sql);
        if($result->num_rows==0)
        {
            $sql1="insert into teacher(email,password,f_name,l_name,address,gender,dob,institute,department) 
                    values('$id','$psw','$f_name','$l_name','$add','$r','$dob','$inst','$dept')";
            $conn->query($sql1);
        }
        

    }
?>