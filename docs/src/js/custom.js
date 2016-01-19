
cm._baseUrl = [cm._baseUrl, 'docs/build'].join('/');

Com.Dialog.prototype.setParams({
    'container' : 'top.document.body'
});

App.LoginBox.prototype.setParams({
    'Com.Tooltip' : {
        'adaptiveX' : true,
        'adaptiveY' : true,
        'top' : 'targetHeight + 12'
    }
});

App.Template.prototype.setParams({
    'stickyFooter' : true
});