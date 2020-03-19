/* *** FAQ *** */

$(function(){
    function init(){
        var nodes = document.querySelectorAll('.lt__faq');
        cm.forEach(nodes, collect);
    };

    function collect(node){
        var items = [];
        new cm.Finder('Com.ToggleBox', null, node, function(classObject){
            items.push(classObject);
            classObject.addEvent('onShowStart', function(){
                cm.forEach(items, function(item){
                    if(item !== classObject){
                        item.collapse();
                    }
                });
            });
        }, {'multiple' : true});
    };

    init();
});