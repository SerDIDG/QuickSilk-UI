<?

$date = new DateTime();
$config = array(
	'positionId' => $date->getTimestamp(),
	'zone' => $_POST['zone'],
	'parentId' => $_POST['parentId'],
	'type' => $_POST['type']
);

$module = '';
switch($_POST['keyword']){
	case 'spacer':
		$module =   '<div class="app__module app-mod__spacer com__spacer is-chassis-visible" style="height:24px" data-element="spacer"></div>';
		break;
	case 'column':
		$module =   '<div class="app__module app-mod__columns com__columns is-chassis-visible is-adaptive indent-24px" data-element="columns">
            			<div data-com__columns="inner" class="inner">
                			<div data-com__columns="holder" class="container">
                                <div style="width: 33.33%;" class="com__column" data-com__columns="column">
                            		<div class="inner" data-com__columns="column-inner" data-element="App.Zone" data-config=\'{"zone" : 0, "parentId" : "'.$config['positionId'].'"}\'></div>
                                </div>
                                <div style="width: 33.33%;" class="com__column" data-com__columns="column">
                            		<div class="inner" data-com__columns="column-inner" data-element="App.Zone" data-config=\'{"zone" : 1, "parentId" : "'.$config['positionId'].'"}\'></div>
                                </div>
                                <div style="width: 33.33%;" class="com__column" data-com__columns="column">
                            		<div class="inner" data-com__columns="column-inner" data-element="App.Zone" data-config=\'{"zone" : 2, "parentId" : "'.$config['positionId'].'"}\'></div>
                                </div>
                            </div>
                        </div>
                    </div>';
		break;
	case 'hidden_tabs':
		$module =  '<div class="app__module app-mod__hidden-tabs pull-left theme-default" data-element="App.ModuleHiddenTabs" data-node="AppModuleHiddenTabs:{}:container">
						<div class="inner" data-node="inner">
							<div class="tabs__head" data-node="head">
								<div class="inner" data-node="head-inner">
									<ul data-node="head-list">
										<li data-node="labels:[]:container" data-config=\'{"id" : "sample", "title" : "Sample"}\'>
											<a>Sample</a>
										</li>
										<li data-node="labels:[]:container" data-config=\'{"id" : "test", "title" : "Test"}\'>
											<a>Test</a>
										</li>
										<li data-node="labels:[]:container" data-config=\'{"id" : "case", "title" : "Case"}\'>
											<a>Case</a>
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
											<a>Sample</a>
										</li>
										<li data-node="options:[]:container" data-config=\'{"id" : "test"}\'>
											<a>Test</a>
										</li>
										<li data-node="options:[]:container" data-config=\'{"id" : "case"}\'>
											<a>Case</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="tabs__content" data-node="content">
								<div class="inner" data-node="content-inner">
									<ul data-node="content-list">
										<li data-node="tabs:[]:container" data-config=\'{"id" : "sample"}\'>
											<div class="inner" data-node="inner" data-element="App.Zone" data-config=\'{"zone" : 0, "parentId" : "'.$config['positionId'].'"}\'></div>
										</li>
										<li data-node="tabs:[]:container" data-config=\'{"id" : "test"}\'>
											<div class="inner" data-node="inner" data-element="App.Zone" data-config=\'{"zone" : 1, "parentId" : "'.$config['positionId'].'"}\'></div>
										</li>
										<li data-node="tabs:[]:container" data-config=\'{"id" : "case"}\'>
											<div class="inner" data-node="inner" data-element="App.Zone" data-config=\'{"zone" : 2, "parentId" : "'.$config['positionId'].'"}\'></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>';
		break;
	default:
		$module =  '<div class="app__module">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut commodo tortor. Nullam ultrices a urna vitae aliquet. Duis est lorem, vehicula sit amet ipsum at, porttitor porta lorem. Maecenas eros massa, efficitur ut pretium a, rhoncus ac nisi. Donec mattis turpis risus, a elementum arcu dapibus eu. Maecenas eget sagittis nisi, in euismod massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec augue nulla, fermentum ac diam id, faucibus sagittis lectus. Mauris scelerisque erat vitae rutrum tristique. Maecenas nec felis laoreet, congue nibh eget, convallis elit. Proin at placerat lectus.</p>
					</div>';
		break;
}

$response = json_encode(array(
	'data' =>  '<div class="app__block-container" data-element="app-block" data-config=\''.json_encode($config).'\' data-node="AppBlock:{}:container">
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