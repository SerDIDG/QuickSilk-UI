cm.define('App.PathwaysView', {
    'extend': 'Com.AbstractController',
    'params': {
        'renderStructure': false,
        'embedStructureOnRender': false,
        'controllerEvents': true,

        'anchorAnimDuration': cm._config.animDuration
    }
},
function(){
    Com.AbstractController.apply(this, arguments);
});

cm.getConstructor('App.PathwaysView', function(classConstructor, className, classProto, classInherit){
    classProto.onConstruct = function(){
        var that = this;
        that.hasClickOverride = false;
    };

    classProto.onDestruct = function(){
        var that = this;
        that.observer && that.observer.disconnect();
    };

    classProto.renderViewModel = function(){
        var that = this;
        // Call parent method - renderViewModel
        classInherit.prototype.renderViewModel.apply(that, arguments);

        // Find menu component
        new cm.Finder('App.ModuleMenu', null, that.nodes.container, function(menu){
            that.components.menu = menu;
            that.components.menu.addEvent('onItemClick', that.menuItemClickEvent.bind(that));
        });

        // Init scroll intersection observer
        that.marginTop = cm.getCSSVariable('--module-pathways--anchor-top');
        that.observer = new IntersectionObserver(that.processObserverEntries.bind(that), {
            root: null,
            rootMargin: [that.marginTop, '0px', '0px', '0px'].join(' '),
            threshold: 0
        });

        // Collect sections
        that.sections = [];
        that.sectionsMap = new Map();
        cm.forEach(that.nodes.sections, that.processSection.bind(that));
    };

    classProto.menuItemClickEvent = function(menu, item){
        var that = this;

        // Override observer behavior while anchor animation plays
        that.hasClickOverride = true;
        that.clickOverrideTimeout && clearTimeout(that.clickOverrideTimeout);
        that.clickOverrideTimeout = setTimeout(function(){
            that.hasClickOverride = false;
        }, that.params.anchorAnimDuration + 300);

        // Set menu link active
        that.components.menu.set(item.value);
    };

    classProto.processSection = function(nodes){
        var that = this;

        var item = {
            id: cm.getData(nodes.container, 'id'),
            container: nodes.container,
            nodes: nodes
        };

        // Add watcher
        item.observerEntry = {};
        that.observer.observe(item.container);

        // Export
        that.sections.push(item);
        that.sectionsMap.set(item.container, item);
    };

    classProto.processObserverEntries = function(entries){
        var that = this;

        cm.forEach(entries, function(entry){
            var item = that.sectionsMap.get(entry.target);
            item.observerEntry = entry;
        });

        if(!that.hasClickOverride){
            that.setCurrentTopItem();
        }
    };

    classProto.setCurrentTopItem = function(){
        var that = this;

        var item = that.sections.find(function(testItem){
            return testItem.observerEntry.isIntersecting;
        });

        if (item) {
            that.components.menu.set(['#', item.id].join(''));
        }
    };
});
