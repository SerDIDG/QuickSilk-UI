
window.Collector = new Com.Collector({
        'autoInit' : true
    })
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

    .add('menu', function(node){
        new Com.Menu({
            'node' : node
        });
    })

    .add('dynamical-default-pagination', function (node) {
        new Com.Pagination({
            'node': node,
            'responseHTML': true,
            'events': {
                'onPageRenderEnd': function (that, page) {
                    // Construct components
                    window.Collector.construct(page['container']);
                }
            },
            'ajax': {
                'type': 'json',
                'params': {
                    'page': '%page%'
                }
            }
        });
    })

    .add('dynamical-scroll-pagination', function (node) {
        new Com.ScrollPagination({
            'node': node,
            'showButton': 'once',
            'responseHTML': true,
            'events': {
                'onPageRenderEnd': function (that, page) {
                    // Construct components
                    window.Collector.construct(page['container']);
                }
            },
            'ajax': {
                'type': 'json',
                'params': {
                    'page': '%page%'
                }
            }
        });
    })

    /* *** APPLICATION *** */

    .add('app-topmenu', function(node){
        new App.TopMenu({
            'node' : node
        });
    }, null, 900)

    .add('app-sidebar', function(node){
        new App.Sidebar({
            'node' : node,
            'events' : {
                'onTabShow' : function(that, item){
                    window.Collector.construct(item['tab']['container']);
                }
            }
        });
    }, null, 910)

    .add('app-zone', function(node){
        new App.Zone({
            'node' : node
        });
    }, null, 920)

    .add('app-block', function(node){
        new App.Block({
            'node' : node
        });
    }, null, 930)

    .add('app-dummy-block', function(node){
        new App.DummyBlock({
            'node' : node
        });
    }, null, 940)

    .add('app-helptour', function(node){
        new App.HelpTour({
            'node' : node
        });
    })

    .add('app-flow', function(node){
        new App.FlowContainer({
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

    .add('app-template', function(node){
        new App.Template({
            'node' : node
        });
    }, null, 990)

    .add('image-gallery-popup', function(node) {
        new Com.GalleryPopup({'node' : node});
    })

    .add('module_image-gallery', function (node) {
        new App.ModuleImageGallery({
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

    .add('module__calendar', function(node){
        new Module.Calendar({
            'node' : node,
            'events' : {
                'onProcessEnd' : function(calendar, node){
                    window.Collector.construct(node);
                }
            }
        });
    })

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

    .add('app-editor', function(node){
        new App.Editor({
            'node' : node,
            'events' : {
                'createRequest' : function(editor, block){
                    cm.ajax({
                        'method' : 'POST',
                        'url' : cm._baseUrl + '/stuff/ajax.editor.create.php',
                        'params' : {
                            'visible' : block.params['visible'],
                            'instanceId' : block.zone.params['instanceId'],
                            'keyword' : block.params['keyword'],
                            'parentPositionId' : block.zone.params['positionId'],
                            'type' : block.params['type'],
                            'zone' : block.zone.params['zone'],
                        },
                        'onSuccess' : function(response){
                            editor.create(response['data'], block);
                        }
                    });
                },
                'duplicateRequest' : function(editor, block){
                    cm.ajax({
                        'method' : 'POST',
                        'url' : cm._baseUrl + '/stuff/ajax.editor.duplicate.php',
                        'params' : {
                            'parentPositionId' : block.zone.params['positionId'],
                            'type' : block.params['type'],
                            'zone' : block.zone.params['zone']
                        },
                        'onSuccess' : function(response){
                            editor.duplicate(response['data'], block);
                        }
                    });
                },
                'replaceRequest' : function(editor, block){
                    cm.ajax({
                        'method' : 'POST',
                        'url' : cm._baseUrl + '/stuff/ajax.editor.replace.php',
                        'params' : {
                            'positionId' : block.params['positionId'],
                            'parentPositionId' : block.zone.params['positionId'],
                            'type' : block.params['type'],
                            'zone' : block.zone.params['zone']
                        },
                        'onSuccess' : function(response){
                            editor.replace(response['data'], block);
                        }
                    });
                },
                'deleteRequest' : function(editor, block){
                    editor.delete(block);
                },
                'moveRequest' : function(editor, block){
                    var upper, upperId, lower, lowerId;
                    if(upper = block.getUpper()){
                        upperId = upper.params['positionId'];
                    }
                    if(lower = block.getLower()){
                        lowerId = lower.params['positionId'];
                    }
                },
                'onProcessEnd' : function(editor, node){
                    window.Collector.construct(node);
                }
            }
        });
    }, null, 1000);

cm.onReady(function(){
    window.Collector.construct(document.body);
});