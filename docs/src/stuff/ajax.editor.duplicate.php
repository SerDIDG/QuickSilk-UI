<?

$date = new DateTime();

$module =  '<div class="app__module">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut commodo tortor. Nullam ultrices a urna vitae aliquet. Duis est lorem, vehicula sit amet ipsum at, porttitor porta lorem. Maecenas eros massa, efficitur ut pretium a, rhoncus ac nisi. Donec mattis turpis risus, a elementum arcu dapibus eu. Maecenas eget sagittis nisi, in euismod massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec augue nulla, fermentum ac diam id, faucibus sagittis lectus. Mauris scelerisque erat vitae rutrum tristique. Maecenas nec felis laoreet, congue nibh eget, convallis elit. Proin at placerat lectus.</p>
			</div>';

$config = array(
	'positionId' => $date->getTimestamp(),
	'zone' => $_POST['zone'],
	'parentId' => $_POST['parentId'],
	'type' => $_POST['type'],
	'index' => $_POST['index']
);

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