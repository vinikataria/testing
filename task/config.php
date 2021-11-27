
<?PHP

  $dbhost="localhost";
  $dbname="login";
  $dbuser="root";
  $pass="";
 try{
   $conn= new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$pass);
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 }
 catch(PDOexception $e){
   echo $e->getMessage();
 }
  

?>