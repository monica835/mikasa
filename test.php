<?php
    $connect=mysqli('localhost','root','pnpassword','mikasa25');

    if (!$connect){
        echo 'not connected to Server';
    }
    $Name=$_POST['name'];
    $Age=$_POST['age'];
    $Address=$_POST['address'];


    $sql="INSERT INTO tblSample(Name,Age,Address) VALUES('$Name',$Age,'$Address')";

    if (!mysqli_query($connect,$sql)){
        echo 'not inserted';
    }else{
        echo 'inserted';
    }



    header("refresh:2; url = test.html");
?>