<?

include_once 'helper.php';

$html = get_include_contents('ajax.panel.view.phtml');

$response = json_encode(array(
	'data' => array(
		'success' => isset($_POST) && isset($_POST['status']) && $_POST['status'] == 'true' ? true : false,
		'title' => 'Menu Constructor',
		'content' => $html
	)
));

sleep(1);

//echo '';
echo $response;