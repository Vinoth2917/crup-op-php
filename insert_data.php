<?php
include("db_config.php");
if(isset($_POST['addstudent'])){
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $age=$_POST['age'];
    if($f_name == ""|| empty($f_name)){
        header('location:index.php?message=You need to fill in the First Name!');
    }
    elseif($l_name == ""|| empty($l_name)){
        header('location:index.php?message=You need to fill in the Last Name!');
    }
    elseif($age == ""|| empty($age)){
        header('location:index.php?message=You need to fill in the age!');
    }
    else{
        $query="insert into `students`(`first_name`,`last_name`,`age`) values('$f_name','$l_name','$age')";
        $result=mysqli_query($conn,$query);
        if(!$result){
            die("Query Failed".mysqli_error());
        }
        else{
            header("location:index.php?insert_msg=Your Data has been added successfully");
        }
    }
}

?>