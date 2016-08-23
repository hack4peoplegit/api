<?PHP
if($_POST["password"]=="anik345"){
	$data2 = array( 'notification' => true, 'error' => false,'title' => $_POST["title"], 'message' => $_POST["message"], 'icon' => 'favi.png', 'tag' => 'mytag' );

$fp = fopen('notification.json', 'w');
fwrite($fp, json_encode($data2));
fclose($fp);
echo "success ".$_POST["title"]." ".$_POST["message"];
}
else {
	echo "unauthenticated";
}


?>