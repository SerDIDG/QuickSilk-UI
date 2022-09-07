$(function(){
    function process(Tabset){
        Tabset
            .removeTab('payments-profile')
            .removeTab('ecommerce-profile')
            .removeTab('user-page')
            .removeTab('notificationmanager-setting');
    }

    new cm.Finder('Com.Tabset', 'profile-form', null, process, {
        'multiple': true
    });
});
