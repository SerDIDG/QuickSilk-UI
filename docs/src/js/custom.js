
cm._baseUrl = [cm._baseUrl, 'docs/build'].join('/');

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
        'type' : 'box',
        'width' : 1000,
        'align' : 'center',
        'fixed' : false,
        'overlapping' : false
    },
    'footer' : {
        'type' : 'box',
        'width' : 1000,
        'align' : 'center'
    }
});