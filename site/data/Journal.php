<?php
$link = mysqli_connect("localhost", "root", "ComputerScienceDep", "collegework");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$email= mysqli_real_escape_string($link, $_REQUEST['email']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$institution = mysqli_real_escape_string($link, $_REQUEST['institution']);
$designation = mysqli_real_escape_string($link, $_REQUEST['designation']);
$describe = mysqli_real_escape_string($link, $_REQUEST['describe']);
 

$sql = "INSERT INTO journal VALUES ('','$email', '$name', '$institution','$designation','$describe')";
if(mysqli_query($link, $sql)){
    header("Location: http://universal-inovators.com/UI/site/data/successsub.html");
    die();
} else{
    //header("Location: http://universal-inovators.com/UI/site/data/failsub.html");
   // die();
 mysqli_error($link);
echo mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>