<?php
include('config.php');
$name=$_POST['name'];
$userid=$_POST['userid'];
$emailid=$_POST['emailid'];
$pass=$_POST['pass'];
$insert="insert into sinnup(name,userid,emailid,pass) value(:name,:userid,:emailid,:pass)";
$singup=$conn->prepare($insert);
$singup->bindparam(':name',$name);
$singup->bindparam(':userid',$userid);
$singup->bindparam(':emailid',$emailid);
$singup->bindparam(':pass',$pass);
$singup->execute();
?>

<html>
    <head>
        <title>singup</title>
    </head>
    <body>welcome to your dashbord
</body>
</html>