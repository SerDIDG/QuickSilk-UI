<?

include_once 'helper.php';

$date = new DateTime();
$name = dirname(__DIR__). '/stuff/temp/' . $date->getTimestamp() . '.txt';
$str = file_get_contents('php://input');
mb_parse_str($str, $data);

$response = json_encode(array(
	'data' => $data
));

file_force_contents($name, $response);


echo $response;