<?PHP
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');  
$string = file_get_contents("notification.json");
$json_a = json_decode($string, true);
echo json_encode( $json_a );
  // prints json object {"name":"God","age":-1}  
?>