<?

include_once 'helper.php';

$date = new DateTime();
$config = array(
	'positionId' => $date->getTimestamp(),
	'zone' => $_POST['zone'],
	'parentPositionId' => $_POST['parentPositionId'],
	'type' => $_POST['type'],
	'keyword' => $_POST['keyword'],
	'locked' => false
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
	case 'workingarea':
		$module =   '<div href="http://google.com" target="_blank" class="app__module app-mod__area" data-element="Module.WorkingArea" data-node="ModuleWorkingArea:{}:container">
            			<div class="inner" data-element="App.Zone" data-config=\'{"zone" : 0, "parentPositionId" : "'.$config['parentPositionId'].'", "positionId" : "'.$config['positionId'].'"}\'></div>
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
	case 'imagegallery':
		$module = '<div class="app__module app-mod__default">
						<div class="pt__grid col-3 is-adaptive indent-4px" data-node="pages" data-element="image-gallery-popup" data-config="{&quot;name&quot; : &quot;122&quot;}">
							<ul class="com__pagination__page is-visible">
								<li>
							        <div class="pt__image is-hover ">
							            <a class="inner" title="Image 1" data-node="items:[]:link" href="/web/00037/files/photos/gallery-small1.jpg">
							                <img src="../../img/examples/gallery/1-th.jpg" class="descr" alt="Image 1">
							            </a>
							        </div>
							    </li>
							    <li>
							        <div class="pt__image is-hover ">
							            <a class="inner" title="Image 2" data-node="items:[]:link" href="/web/00037/files/photos/gallery-small2.jpg">
							                <img src="../../img/examples/gallery/2-th.jpg" class="descr" alt="Image 2">
							            </a>
							        </div>
							    </li>
							    <li>
							        <div class="pt__image is-hover ">
							            <a class="inner" title="Image 3" data-node="items:[]:link" href="/web/00037/files/photos/gallery-small3.jpg">
							                <img src="../../img/examples/gallery/3-th.jpg" class="descr" alt="Image 3">
							            </a>
							        </div>
							    </li>
							    <li>
							        <div class="pt__image is-hover ">
							            <a class="inner" title="Image 4" data-node="items:[]:link" href="/web/00037/files/photos/gallery-small4.jpg">
							                <img src="../../img/examples/gallery/4-th.jpg" class="descr" alt="Image 4">
							            </a>
							        </div>
							    </li>
							    <li>
							        <div class="pt__image is-hover ">
							            <a class="inner" title="Image 5" data-node="items:[]:link" href="/web/00037/files/photos/gallery-small5.jpg">
							                <img src="../../img/examples/gallery/5-th.jpg" class="descr" alt="Image 5">
							            </a>
							         </div>
							    </li>
							    <li>
							        <div class="pt__image is-hover ">
							            <a class="inner" title="Image 6" data-node="items:[]:link" href="/web/00037/files/photos/gallery-small6.jpg">
							                <img src="../../img/examples/gallery/6-th.jpg" class="descr" alt="Image 6">
							            </a>
							        </div>
							    </li>
							</ul>
						</div>
                    </div>';
		break;
	case 'rollover-tabs':
		$module =  '<div class="app__module app-mod__rollover-tabs pull-left expand-bottom theme-default" data-element="App.ModuleRolloverTabs" data-node="AppModuleRolloverTabs:{}:container" data-config=\'{"event" : "hover", "expand" : "bottom", "attachment" : "screen", "width" : "800px"}\'>
					 	<div class="inner" data-node="inner">
							<div class="tabs__head" data-node="head">
								<div class="inner" data-node="head-inner">
									<ul data-node="head-list">
										<li data-node="labels:[]:container" data-config=\'{"id" : "sample", "title" : "Sample"}\'>
											<a data-node="link">Sample</a>
										</li>
										<li data-node="labels:[]:container" data-config=\'{"id" : "test", "title" : "Test"}\'>
											<a data-node="link">Test</a>
										</li>
										<li data-node="labels:[]:container" data-config=\'{"id" : "case", "title" : "Case"}\'>
											<a data-node="link">Case</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="tabs__menu" data-node="menu">
								<div class="inner pt__menu menu" data-node="menu-inner">
									<div class="icon default linked"></div>
									<div class="label" data-node="menu-label"></div>
									<ul class="pt__menu-dropdown" data-node="menu-list">
										<li data-node="options:[]:container" data-config=\'{"id" : "sample"}\'>
											<a data-node="link">Sample</a>
										</li>
										<li data-node="options:[]:container" data-config=\'{"id" : "test"}\'>
											<a data-node="link">Test</a>
										</li>
										<li data-node="options:[]:container" data-config=\'{"id" : "case"}\'>
											<a data-node="link">Case</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="tabs__content" data-node="content">
								<div class="inner" data-node="content-inner">
									<ul data-node="content-list">
										<li data-node="tabs:[]:container" data-config=\'{"id" : "sample"}\'>
											<div class="inner" data-node="inner" data-element="App.Zone" data-config=\'{"zone" : 0, "parentPositionId" : "'.$config['parentPositionId'].'", "positionId" : "'.$config['positionId'].'"}\'></div>
										</li>
										<li data-node="tabs:[]:container" data-config=\'{"id" : "test"}\'>
											<div class="inner" data-node="inner" data-element="App.Zone" data-config=\'{"zone" : 1, "parentPositionId" : "'.$config['parentPositionId'].'", "positionId" : "'.$config['positionId'].'"}\'></div>
										</li>
										<li data-node="tabs:[]:container" data-config=\'{"id" : "case"}\'>
											<div class="inner" data-node="inner" data-element="App.Zone" data-config=\'{"zone" : 2, "parentPositionId" : "'.$config['parentPositionId'].'", "positionId" : "'.$config['positionId'].'"}\'></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
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
							</ul>
						</div>
						<div class="inner" data-node="inner">'.$module.'</div>
					</div>
				</div>'
));

echo $response;