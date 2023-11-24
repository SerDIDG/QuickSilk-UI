cm.define('App.ModuleImageGallery', {
    extend: 'App.AbstractModule',
    params: {
        renderStructure: false,
        embedStructureOnRender: false,
        type: 'default',                  // default | tiles
        popup: true,
        navigation: false,
        count: 0,
        perPage: 0,
    },
},
function() {
    App.AbstractModule.apply(this, arguments);
});

cm.getConstructor('App.ModuleImageGallery', function(classConstructor, className, classProto, classInherit) {
    classProto.onConstructStart = function() {
        var that = this;

        // Variables
        that.popupRequestCallback = null;
        that.pages = [];
    };

    classProto.onValidateParams = function() {
        var that = this;
        that.params.count = parseInt(that.params.count);
        that.params.perPage = parseInt(that.params.perPage);
    };

    classProto.renderViewModel = function() {
        var that = this;

        // Call parent method
        classInherit.prototype.renderViewModel.apply(that, arguments);

        // Init pagination
        new cm.Finder('Com.ScrollPagination', that.params.name, that.params.node, function(classObject) {
            that.components.pagination = classObject;
            that.components.pagination.addEvent('onPageRenderEnd', that.processPage.bind(that));
        });
        new cm.Finder('Com.Pagination', that.params.name, that.params.node, function(classObject) {
            that.components.pagination = classObject;
            that.components.pagination.addEvent('onPageRenderEnd', that.processPage.bind(that));
        });
        new cm.Finder('Com.GalleryPopup', that.params.name, that.params.node, function(classObject) {
            that.components.popup = classObject;
            if (that.params.navigation) {
                that.components.gallery = that.components.popup.getGallery();
                that.components.gallery.setParams({
                    navigation: {
                        enable: false,
                        cycle: false,
                        count: that.params.count,
                    },
                });
                that.components.popup.addEvent('onPrev', that.requestPrevItem.bind(that));
                that.components.popup.addEvent('onNext', that.requestNextItem.bind(that));
            }
        });
    };

    classProto.processPage = function(pagination, data) {
        var that = this,
            nodes = that.getDataNodesObject(data.container, that.params.nodesDataMarker, false),
            itemsLength = nodes.items ? nodes.items.length : 0;

        // Add to array
        that.pages[data.page] = data;

        // Add to gallery
        if (that.params.popup && that.components.popup) {
            that.components.popup.collect(data.container, {
                fromIndex: (data.page - 1) * that.params.perPage,
                fromPage: data.page,
            });
            if (that.popupRequestCallback) {
                cm.isFunction(that.popupRequestCallback) && that.popupRequestCallback();
                that.popupRequestCallback = null;
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

    classProto.requestPrevItem = function(popup, data) {
        var that = this;
        var index = data.index - 1;
        var page = Math.floor(index / that.params.perPage) + 1;

        if (index < 0) {
            return;
        }

        if (cm.isInstance(that.components.pagination, 'Com.Pagination')) {
            if (!that.pages[page] || !that.pages[page].isRendered) {
                that.popupRequestCallback = function() {
                    that.requestPrevItem(popup, data);
                };
                popup.toggleLoader(true);
                that.components.pagination.set(page);
            } else {
                that.components.pagination.set(page);
                popup.set(index);
            }
        } else if (cm.isInstance(that.components.pagination, 'Com.ScrollPagination')) {
            popup.set(index);
        } else {
            popup.close();
        }
    };

    classProto.requestNextItem = function(popup, data) {
        var that = this;
        var index = data.index + 1;
        var page = Math.floor(index / that.params.perPage) + 1;

        if (index >= popup.getCount()) {
            return;
        }

        if (cm.isInstance(that.components.pagination, 'Com.Pagination')) {
            if (!that.pages[page] || !that.pages[page].isRendered) {
                that.popupRequestCallback = function() {
                    that.requestNextItem(popup, data);
                };
                popup.toggleLoader(true);
                that.components.pagination.set(page);
            } else {
                that.components.pagination.set(page);
                popup.set(index);
            }
        } else if (cm.isInstance(that.components.pagination, 'Com.ScrollPagination')) {
            if (index < popup.getLength()) {
                popup.set(index);
            } else if (index < popup.getCount()) {
                that.popupRequestCallback = function() {
                    that.requestNextItem(popup, data);
                };
                popup.toggleLoader(true);
                that.components.pagination.set();
            }
        } else {
            popup.close();
        }
    };
});
