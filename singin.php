<?php
include('config.php');
if(isset($_POST['btn']))
{
$user_id=$_POST['user_id'];
$password=$_POST['password'];
$sql="SELECT userid FROM sinnup WHERE userid={$user_id} AND pass={$password}";
$result= mysqli_query($conn,$sql) or die("Query failed");
if(mysqli_num_rows($result)>0){

}else{
    echo 'wrong';
}
}
?>