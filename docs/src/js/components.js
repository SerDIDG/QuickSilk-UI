window.Collector = new Com.Collector()
    .addEvent('onConstruct', function(collector, data){
        Part.Menu();
        Part.Autoresize(data['node']);
    })

    /* *** COMMON *** */

    .add('glossary', function(node){
        new Com.Glossary({
            'node' : node
        });
    })

    .add('togglebox', function(node){
        new Com.ToggleBox({
            'node' : node
        });
    })

    .add('tabset-helper', function(node){
        new Com.TabsetHelper({
            'node' : node
        });
    })

    .add('tabset', function(node){
        new Com.Tabset({
            'node' : node
        });
    })

    .add('columns', function(node){
        new Com.Columns({
            'columns' : node
        });
    })

    .add('color-picker', function(node){
        new Com.ColorPicker({
            'input' : node
        });
    })

    .add('datepicker', function(node){
        new Com.Datepicker({
            'input' : node
        });
    })

    .add('select', function(node){
        new Com.Select({
            'select' : node
        });
    })

    .add('spacer', function(node){
        new Com.Spacer({
            'node' : node
        });
    })

    .add('slider', function(node){
        new Com.Slider({
            'node' : node
        });
    })

    .add('action-menu', function(node){
        new Com.ActionMenu({
            'node' : node
        });
    })

    /* *** APPLICATION *** */

    .add('app-topmenu', function(node){
        new App.TopMenu({
            'node' : node
        });
    })

    .add('app-template', function(node){
        new App.Template({
            'node' : node
        });
    })

    .add('app-sidebar', function(node){
        new App.Sidebar({
            'node' : node
        });
    })
    .add('app-helptour', function(node){
        new App.HelpTour({
            'node' : node
        });
    })

    .add('app-stylizer', function(node){
        new App.Stylizer({
            'node' : node
        });
    })

    .add('templates-list', function(node){
        new App.TemplatesList({
            'node' : node
        })
    })

    .add('login-box', function(node){
        new App.LoginBox({
            'node' : node
        });
    })

    /* *** MODULES *** */

    .add('module-menu', function(node){
        new App.ModuleMenu({
            'node' : node
        });
    })

    /* *** DOCS *** */

    .add('docs__sidebar', function(node){
        new Com.CollapsibleLayout({
            'node' : node
        });
    })

    .add('docs__togglebox', function(node){
        new Com.ToggleBox({
            'node' : node
        });
    })

    /* *** TEST STUFF *** */

    .add('login-popup', function(node){
        var dialog = new Com.Dialog({
            'content' : cm.getEl('sample-loginPopup'),
            'title' : 'Login',
            'autoOpen' : false,
            'removeOnClose' : false,
            'titleReserve' : false,
            'width' : 400
        });
        cm.addEvent(node, 'click', dialog.open);
    })

    .add('forgot-popup', function(node){
        var dialog = new Com.Dialog({
            'content' : cm.getEl('sample-forgotPopup'),
            'title' : 'Password Recovery',
            'autoOpen' : false,
            'removeOnClose' : false,
            'titleReserve' : false,
            'width' : 400
        });
        cm.addEvent(node, 'click', dialog.open);
    })

    /* *** TEMPLATE EDITOR *** */

    .add('template-editor', function(node){
        var onRequest = function(TE, data){
            var config = cm.parseJSON(data['node'].getAttribute('data-config')) || {};

            var widget = '<div class="app__block-container" data-com-draganddrop="draggable">' +
                '<div class="app__block is-editable">' +
                '<div class="border"></div>' +
                '<div class="drag" data-com-draganddrop="drag">' +
                '<div class="icon draggable"></div>' +
                '</div>' +
                '<div class="drag is-bottom" data-com-draganddrop="drag-bottom">' +
                '<div class="icon draggable"></div>' +
                '</div>' +
                '<div class="pt__menu menu">' +
                '<div class="icon small settings"></div>' +
                '<ul class="pt__menu-dropdown">' +
                '<li><a>Remove</a></li>' +
                '</ul>' +
                '</div>' +
                '<div class="inner">$content$</div>' +
                '</div>';

            var types = {
                'columns' : '<div class="app__module com__columns app-mod__columns is-chassis-visible is-editable" data-element="columns">' +
                '<div class="inner" data-com__columns="inner">' +
                '<div class="container" data-com__columns="holder">' +
                '<div class="com__column" data-com__columns="column" style="width: 33%;">' +
                '<div class="inner" data-com__columns="column-inner" data-com-draganddrop="area"></div>' +
                '</div>' +
                '<div class="com__column" data-com__columns="column" style="width: 34%;">' +
                '<div class="inner" data-com__columns="column-inner" data-com-draganddrop="area"></div>' +
                '</div>' +
                '<div class="com__column" data-com__columns="column" style="width: 33%;">' +
                '<div class="inner" data-com__columns="column-inner" data-com-draganddrop="area"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>',
                'content' : '<div class="app__module com__columns app-mod__columns is-chassis-visible is-editable" contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ipsum est, consectetur nec viverra nec, vestibulum id tellus. Cras neque risus, gravida ornare blandit ut, porttitor placerat leo. Maecenas sodales turpis lacus, ac ultricies odio finibus nec. Nulla et efficitur diam, et lobortis ex. Maecenas dapibus feugiat ligula, vitae dignissim est malesuada sed. Maecenas dictum erat nisl. In non neque lacus. Ut vitae massa purus. Etiam facilisis rhoncus eros quis fermentum. Proin sed libero vel mauris feugiat volutpat sed non ligula. Fusce ultricies in mi a lacinia. Donec faucibus arcu nibh, a pellentesque orci venenatis id. Mauris fringilla eleifend nibh eget finibus.</div>'
            };

            var content = widget.replace('$content$', types[config['type'] || 'columns']);

            setTimeout(function(){
                TE.replaceWidget(data['node'], cm.strToHTML(content), {'noEvent' : true});
            }, 500);
        };

        new App.TemplateEditor({
            'node' : node,
            'events' : {
                'onAppend' : onRequest,
                'onReplace' : function(TE, data){
                    window.Collector.construct(data['node']);
                    // Register areas
                    var areas = cm.getByAttr('data-com-draganddrop', 'area', data['node']);
                    cm.forEach(areas, function(area){
                        TE.registerArea(area, {});
                    });
                }
            }
        });
    });

cm.onReady(function(){
    window.Collector.construct();
});