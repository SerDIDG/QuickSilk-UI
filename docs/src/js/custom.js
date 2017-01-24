if(cm._baseUrl.indexOf('projectstagingserver.com') > -1){
    cm._baseUrl = [cm._baseUrl, 'dev-1/quicksilk__ui/docs/build'].join('/');
}else{
    cm._baseUrl = [cm._baseUrl, 'docs/build'].join('/');
}

App.LoginBox.prototype.setParams({
    'Com.Tooltip' : {
        'adaptiveX' : true,
        'adaptiveY' : true,
        'top' : 'targetHeight + 12'
    }
});

App.Template.prototype.setParams({
    'stickyFooter' : true,
    'template' : {
        'type' : 'box',
        'width' : 1000,
        'align' : 'center',
        'indent' : 24
    },
    'header' : {
        'fixed' : false,
        'overlapping' : false,
        'transformed' : true
    }
});