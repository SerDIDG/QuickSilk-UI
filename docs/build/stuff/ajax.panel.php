<?

include_once 'helper.php';

$contentView = get_include_contents('ajax.panel.content.view.phtml');
$previewView = get_include_contents('ajax.panel.preview.view.phtml');

$response = json_encode(array(
	'data' => array(
		'success' => isset($_POST) && isset($_POST['status']) && $_POST['status'] == 'true' ? true : false,
		'title' => 'Menu Constructor',
		'content' => $contentView,
		'preview' => $previewView
	)
));

sleep(1);

//echo '';
echo $response;