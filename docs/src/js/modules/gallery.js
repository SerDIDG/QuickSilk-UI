cm.define('App.ModuleImageGallery', {
    extend: 'App.AbstractModule',
    params: {
        renderStructure: false,
        embedStructureOnRender: false,
        type: 'default',                  // default | tiles
        popup: true
    }
},
function() {
    App.AbstractModule.apply(this, arguments);
});

cm.getConstructor('App.ModuleImageGallery', function(classConstructor, className, classProto, classInherit) {
    classProto.onConstructStart = function() {
        var that = this;

        // Variables
        that.popupRequestData = null;

        // Binds
        that.processPageHandler = that.processPage.bind(that);
        that.processItemHandler = that.processItem.bind(that);
        that.processPopupRequestHandler = that.processPopupRequest.bind(that);
    };

    classProto.renderViewModel = function() {
        var that = this;

        // Call parent method
        classInherit.prototype.renderViewModel.apply(that, arguments);

        // Init pagination
        new cm.Finder('Com.ScrollPagination', that.params['name'], that.params.node, function(classObject) {
            that.components.pagination = classObject;
            that.components.pagination.addEvent('onPageRenderEnd', that.processPageHandler);
        });
        new cm.Finder('Com.Pagination', that.params['name'], that.params.node, function(classObject) {
            that.components.pagination = classObject;
            that.components.pagination.addEvent('onPageRenderEnd', that.processPageHandler);
        });
        new cm.Finder('Com.GalleryPopup', that.params['name'], that.params.node, function(classObject) {
            that.components.popup = classObject;
            that.components.popup.addEvent('onRequest', that.processPopupRequestHandler);
        });
    };

    classProto.processPage = function(pagination, page) {
        var that = this,
            nodes = that.getDataNodesObject(page.container, that.params.nodesDataMarker, false),
            itemsLength = nodes.items ? nodes.items.length : 0;

        // Add to gallery
        if (that.params.popup && that.components.popup) {
            that.components.popup.collect(page.container);
            if (that.popupRequestData) {
                cm.isFunction(that.popupRequestData.callback) && that.popupRequestData.callback();
                that.popupRequestData = null;
            }
        }

        // Process tiles items
        if (that.params.type === 'tiles') {
            that.processItems(nodes);
        }

        // Finalize scroll pagination
        if (!itemsLength) {
            cm.isFunction(that.components.pagination.finalize) && that.components.pagination.finalize();
        }
    };

    classProto.processPopupRequest = function(gallery, data) {
        var that = this;
        that.popupRequestData = data;
        if (cm.isInstance(that.components.pagination, 'Com.Pagination')) {
            that.components.pagination.next();
        } else if (cm.isInstance(that.components.pagination, 'Com.ScrollPagination')) {
            that.components.pagination.set();
        } else {
            that.components.popup.close();
        }
    };

    classProto.processItems = function(nodes) {
        var that = this,
            itemsLength = nodes.items ? nodes.items.length : 0,
            rowI = 0,
            row;

        // Process items
        cm.forEach(nodes.items, function(item, i) {
            // Start row
            rowI++;
            if (rowI === 1) {
                row = {
                    items: [],
                    width: 0
                };
            }

            // Render item
            that.processItem(item);
            row.width += item._config.normalizedWidth;
            row.items.push(item);

            // End row
            if (rowI >= that.params.columns || i === (itemsLength - 1)) {
                // Empty tiles
                if (row.items.length < that.params.columns) {
                    row.width += 134 * (that.params.columns - row.items.length);
                }

                // Calculate item widths
                cm.forEach(row.items, function(rowItem) {
                    that.setItemWidth(rowItem, row.width);
                });
                rowI = 0;
            }
        });
    };

    classProto.processItem = function(item) {
        var that = this;

        // Get config
        item._config = that.getNodeDataConfig(item.container);
        item._config.aspectRatio = item._config.width / item._config.height;
        item._config.aspectHeight = 100 / item._config.aspectRatio;
        item._config.normalizedWidth = item._config.aspectRatio * 100;
        item._config.image = item.image.getAttribute('src');

        // Image
        item.descr = cm.node('div', {classes: 'descr'});
        item.descr.style.paddingBottom = item._config.aspectHeight + '%';
        item.descr.style.backgroundImage = cm.URLToCSSURL(item._config.image);
        cm.insertAfter(item.descr, item.image);
        cm.remove(item.image);

        // Load
        cm.onImageLoad(item._config.image, function() {
            cm.addClass(item.link, 'is-loaded', true);
        });
    };

    classProto.setItemWidth = function(item, rowWidth) {
        var that = this,
            newWidth = 100 / rowWidth * item._config.normalizedWidth;
        item.container.style.width = newWidth + '%';
    };
});
