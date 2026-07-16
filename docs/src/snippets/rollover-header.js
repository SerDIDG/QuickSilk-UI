$(function(){
    const container = Template.getNodes('headerContainer');
    if (!container) return;

    new cm.Finder('App.ModuleRolloverTabs', null, container, tabs => {
        tabs.addEvent('onTabShow', () => cm.addClass(container, 'is-active'));
        tabs.addEvent('onTabHide', () => cm.removeClass(container, 'is-active'));
    }, {multiple: true});
});