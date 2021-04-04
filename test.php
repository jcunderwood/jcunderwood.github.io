<?php
 header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
//echo $_POST["test"];

$data = json_decode(file_get_contents('php://input'), true);



$url = 'http://192.168.1.116/relay.php';
//echo $data["starttext"];
$horrah = array('text' => $data["starttext"], 'key2' => 'value2');

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($horrah)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
echo $result;
//var_dump($result);
//echo exec("python /var/www/html/test.py" . " " . $data["starttext"]);

?>

