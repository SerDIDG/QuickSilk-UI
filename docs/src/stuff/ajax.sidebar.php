<?

$data;

switch($_GET['tab']){
	case 'form-modules':
		$data = "<dl class=\"com__togglebox app__blocks-category is-show\" data-element=\"Com.ToggleBox\" data-config='{\"remember\" : true, \"name\" : \"app__sidebar-form-layout\"}' data-node=\"ComToggleBox.container\">
                    <dt data-node=\"ComToggleBox.button\">
                        <span class=\"icon default\"></span>
                        <span class=\"title\">Layout</span>
                    </dt>
                    <dd data-node=\"ComToggleBox.target\">
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"columns\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_column\"></div>
                                    <div class=\"caption\">Columns</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"content\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_content\"></div>
                                    <div class=\"caption\">Content</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"divider\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_divider\"></div>
                                    <div class=\"caption\">Divider</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"spacer\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_spacer\"></div>
                                    <div class=\"caption\">Spacer</div>
                                </div>
                            </div>
                        </div>
                    </dd>
                </dl>
                <dl class=\"com__togglebox app__blocks-category is-show\" data-element=\"Com.ToggleBox\" data-config='{\"remember\" : true, \"name\" : \"app__sidebar-form-element\"}' data-node=\"ComToggleBox.container\">
                    <dt data-node=\"ComToggleBox.button\">
                        <span class=\"icon default\"></span>
                        <span class=\"title\">Elements</span>
                    </dt>
                    <dd data-node=\"ComToggleBox.target\">
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_button\"></div>
                                    <div class=\"caption\">Button</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_input\"></div>
                                    <div class=\"caption\">Input</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_password\"></div>
                                    <div class=\"caption\">Password</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_hidden\"></div>
                                    <div class=\"caption\">Hidden</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_select\"></div>
                                    <div class=\"caption\">Select</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_datepicker\"></div>
                                    <div class=\"caption\">Date Picker</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_timepicker\"></div>
                                    <div class=\"caption\">Time Picker</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_checkbox\"></div>
                                    <div class=\"caption\">Checkbox</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_multicheckbox\"></div>
                                    <div class=\"caption\">Multi Checkbox</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_radiobutton\"></div>
                                    <div class=\"caption\">Radio button</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_textarea\"></div>
                                    <div class=\"caption\">Textarea</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_wysiwyg\"></div>
                                    <div class=\"caption\">Wysiwyg</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_captcha\"></div>
                                    <div class=\"caption\">Captcha</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"app__block-container\" data-element=\"app-dummy-block\" data-node=\"AppDummyBlock:{}:container\" data-config='{\"keyword\" : \"breadcrumbs\", \"type\" : \"form\"}'>
                            <div class=\"app__block-dummy\" data-node=\"dummy\">
                                <div class=\"inner\">
                                    <div class=\"icon module-element_imagebrowser\"></div>
                                    <div class=\"caption\">Image browser</div>
                                </div>
                            </div>
                        </div>
                    </dd>
                </dl>";
		break;
	default:
		$data = "<div class=\"pt__image is-adaptive\"><div class=\"inner\"><img class=\"descr\" src=\"/docs/build/img/examples/gallery/1.jpg\"</div></div>";
		break;
}

$response = json_encode(array(
	'data' => $data
));

echo $response;