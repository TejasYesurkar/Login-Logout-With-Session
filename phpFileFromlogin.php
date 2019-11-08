 <?php
define('HOST','ServerName');
define('USER','username');
define('PASS','Password');
define('DB','DatabaseName');


$con = mysqli_connect(HOST,USER,PASS,DB);
$email  = $_GET['user'];
$pass = $_GET['pass'];
 
$sql = "select * from registration where username ='$username' and password='$pass'";

$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,array('username'=>$row[1],
'nameofcustomer'=>$row[2],
));

}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>
