<?

include_once 'helper.php';

$date = new DateTime();
$config = array(
	'positionId' => $date->getTimestamp(),
	'zone' => $_POST['zone'],
	'parentPositionId' => $_POST['parentPositionId'],
	'type' => $_POST['type'],
	'keyword' => $_POST['keyword'],
	'locked' => false,
	'sticky' => $_POST['keyword'] == 'sticky' ? true : false
);
if(!empty($_POST['instanceId']) && $_POST['instanceId'] != 'false'){
	$config['instanceId'] = $_POST['instanceId'];
}

$module = '';
switch($_POST['keyword']){
	case 'form_builder':
		$module =   '<div class="app__module app-mod__default" data-element="Mod.Form" data-node="ModForm:{}:container" data-config=\'{"remember" : true, "name" : "form"}\'>
						<div class="form"> 
							<div data-element="App.Zone" data-config=\'{"instanceId" : 1, "zone" : "content", "parentId" : "0", "positionId" : "content", "type" : "form-manager", "link" : {"parentPositionId" : "'.$config['parentPositionId'].'", "positionId" : "'.$config['positionId'].'", "type" : "'.$config['type'].'"}}\'></div>
						</div>
					 </div>';
		break;
	case 'spacer':
		$module =   '<div class="app__module app-mod__spacer com__spacer is-chassis-visible" style="height:24px" data-element="spacer" data-config=\'{"height" : 24}\'></div>';
		break;
	case 'anchor2':
		$module =   '<div class="app__module mod__anchor" data-element="Module.Anchor" data-config=\'{"name" : "123"}\'>
						<a class="anchor__anchor" name="123"></a>
						<div class="app__module__controls">Anchor #123</div>
					</div>';
		break;
	case 'anchor':
		$module =   '<div class="app__module mod__anchor" data-element="Module.Anchor" data-config=\'{"name" : "'.$config['positionId'].'"}\'>
						<a class="anchor__anchor" name="'.$config['positionId'].'"></a>
						<div class="app__module__controls">Anchor #'.$config['positionId'].'</div>
					</div>';
		break;
	case 'column':
		$module =   '<div class="app__module app-mod__columns com__columns is-chassis-visible is-adaptive indent-24px" data-element="columns">
            			<div data-com__columns="inner" class="inner">
                			<div data-com__columns="holder" class="container">
                                <div style="width: 33.33%;" class="com__column" data-com__columns="column">
                            		<div class="inner" data-com__columns="column-inner" data-element="App.Zone" data-config=\'{"zone" : 0, "parentPositionId" : "'.$config['parentPositionId'].'", "positionId" : "'.$config['positionId'].'"}\'></div>
                                </div>
                                <div style="width: 33.33%;" class="com__column" data-com__columns="column">
                            		<div class="inner" data-com__columns="column-inner" data-element="App.Zone" data-config=\'{"zone" : 1, "parentPositionId" : "'.$config['parentPositionId'].'", "positionId" : "'.$config['positionId'].'"}\'></div>
                                </div>
                                <div style="width: 33.33%;" class="com__column" data-com__columns="column">
                            		<div class="inner" data-com__columns="column-inner" data-element="App.Zone" data-config=\'{"zone" : 2, "parentPositionId" : "'.$config['parentPositionId'].'", "positionId" : "'.$config['positionId'].'"}\'></div>
                                </div>
                            </div>
                        </div>
                    </div>';
		break;
	case 'spoiler':
		$module =   '<div class="app__module module__spoiler">
						<dl class="com__togglebox has-title-bg is-base is-show" data-element="Com.ToggleBox" data-node="ComToggleBox:{}:container">
							<dt data-node="button">
								<span class="icon default linked"></span>
								<span class="title">Spoiler</span>
							</dt>
							<dd data-node="target">
								<div class="inner">
	                                <div class="inner" data-element="App.Zone" data-config=\'{"zone" : 0, "parentPositionId" : "'.$config['parentPositionId'].'", "positionId" : "'.$config['positionId'].'"}\'></div>
								</div>
							</dd>
						</dl>
                    </div>';
		break;
	default:
		$module = get_include_contents('modules/' . $_POST['keyword'] . '.phtml', $config);
		if(empty($module)){
			$module =  '<div class="app__module">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut commodo tortor. Nullam ultrices a urna vitae aliquet. Duis est lorem, vehicula sit amet ipsum at, porttitor porta lorem. Maecenas eros massa, efficitur ut pretium a, rhoncus ac nisi. Donec mattis turpis risus, a elementum arcu dapibus eu. Maecenas eget sagittis nisi, in euismod massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec augue nulla, fermentum ac diam id, faucibus sagittis lectus. Mauris scelerisque erat vitae rutrum tristique. Maecenas nec felis laoreet, congue nibh eget, convallis elit. Proin at placerat lectus.</p>
						</div>';
		}
		break;
}

$response = json_encode(array(
	'data' =>  '<div class="app__block-container is-indent-auto" data-element="app-block" data-config=\''.json_encode($config).'\' data-node="AppBlock:{}:container">
					<div class="app__block" data-node="block:{}:container">
						<div class="border"></div>
						<div class="drag" data-node="drag:[]:container">
							<div class="icon draggable"></div>
						</div>
						<div class="drag is-bottom" data-node="drag:[]:container">
							<div class="icon draggable"></div>
						</div>
						<div class="pt__menu menu" data-node="menu:{}:container">
							<div class="icon small settings"></div>
							<ul class="pt__menu-dropdown pull-right">
								<li>
									<a data-node="edit">Edit</a>
								</li>
								<li>
									<a data-node="delete">Delete</a>
								</li>
								<li>
									<a data-node="duplicate">Duplicate</a>
								</li>
								<li>
									<a data-node="copy">Copy to page</a>
								</li>
							</ul>
						</div>
						<div class="inner" data-node="inner">'.$module.'</div>
					</div>
				</div>'
));

echo $response;