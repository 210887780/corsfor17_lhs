<?php
header("Access-Control-Allow=Origin:http://localhost:63342");
header("Access-Control-Allow-Credentials:true");
header('Access-Control-Allow-Headers:Content-Type');
$useranme=array('userName'=>'123456');
echo json_encode($useranme);
 ?>