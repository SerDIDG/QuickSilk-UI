/* *** MENU *** */

$(function(){
    var items = [];

    function init(){
        var nodes = document.querySelectorAll('.app-mod__menu.vertical.theme__menu-icon');
        cm.forEach(nodes, collect);
    };

    function collect(node){
        var dropdowns = node.querySelectorAll('li.has-dropdown');
        cm.forEach(dropdowns, function(container){
            var item = {
                'container' : container,
                'link' : container.querySelector('a'),
                'dropdown' : container.querySelector('ul'),
                'isVisible' : cm.hasClass(container, 'visible')
            };
            cm.addEvent(item.link, 'click', function(e){
                cm.preventDefault(e);
                toggle(item);
            });
            items.push(item);
        });
    };

    function toggle(item){
        // Toggle current
        if(item.isVisible){
            hide(item);
        }else{
            show(item);
        }
        // Hide each other
        cm.forEach(items, function(dItem){
            if(item !== dItem){
                hide(dItem);
            }
        });
    };

    function show(item){
        if(!item.isProcessing && !item.isVisible){
            item.isProcessing = true;
            item.dropdown.style.height = '0px';
            item.dropdown.style.overflow = 'hidden';
            cm.onSchedule(function(){
                cm.addClass(item.container, 'visible');
                item.dropdown.style.height = item.dropdown.scrollHeight + 'px';
                cm.addEvent(item.dropdown, 'transitionend', function onTransitionEnd(){
                    cm.removeEvent(item.dropdown, 'transitionend', onTransitionEnd);
                    item.dropdown.style.height = 'auto';
                    item.dropdown.style.overflow = 'visible';
                    item.isVisible = true;
                    item.isProcessing = false;
                });
            });
        }
    };

    function hide(item){
        if(!item.isProcessing && item.isVisible){
            item.isProcessing = true;
            item.dropdown.style.height = item.dropdown.scrollHeight + 'px';
            item.dropdown.style.overflow = 'hidden';
            cm.onSchedule(function(){
                cm.removeClass(item.container, 'visible');
                item.dropdown.style.height = '0px';
                cm.addEvent(item.dropdown, 'transitionend', function onTransitionEnd(){
                    cm.removeEvent(item.dropdown, 'transitionend', onTransitionEnd);
                    item.isVisible = false;
                    item.isProcessing = false;
                });
            });
        }
    };

    init();
});