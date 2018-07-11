<?php
// include db connect class
require_once __DIR__ . '/db_connect.php';
session_start();
// connecting to db
$link = mysqli_connect("localhost", "root", "ComputerScienceDep", "collegework");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$users=mysqli_real_escape_string($link, $_POST['user']);
$pass=mysqli_real_escape_string($link, $_POST['pswd']);
$sql="SELECT *FROM admiins where users='".$users."' and password='".$pass."'";
$result=mysqli_query($link, $sql);
$NumRows = mysqli_num_rows($result);

if ( $NumRows > 0) 
{
    //$_SESSION["user_id"] = $row['users'];
    $_SESSION['username'] = $users;
    $_SESSION['valid'] = true;
    header("Location:  http://universal-inovators.com/UI/site/data/admin/loggedinoption.php");
    die();

} else
{
echo $NumRows;
//header("Location: http://universal-inovators.com/UI/site/data/failsub.html");
    // die();

}
?>

