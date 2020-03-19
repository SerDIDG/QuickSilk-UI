/* *** TABS *** */

$(function(){
    function init(){
        var nodes = document.querySelectorAll('.app-mod__tabs.theme--team');
        cm.forEach(nodes, collect);
    };

    function collect(node){
        new cm.Finder('Com.Tabset', null, node, render, {'multiple' : true});
    };

    function render(classObject){
        // Initial settings
        if(cm.getPageSize('winWidth') <= cm._config.adaptiveFrom){
            classObject.setParams({
                'setInitialTab' : false,
                'unsetOnReClick' : true
            });
        }else{
            classObject.setParams({
                'unsetOnReClick' : true
            });
        }
    };

    init();
});