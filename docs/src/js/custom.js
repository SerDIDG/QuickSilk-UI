if(cm._baseUrl.indexOf('serdidg.github.io') > -1){
    cm._baseUrl = [cm._baseUrl, 'QuickSilk-UI/docs/build'].join('/');
}else if(cm._baseUrl.indexOf('projectstagingserver.com') > -1){
    cm._baseUrl = [cm._baseUrl, 'dev-1/quicksilk__ui/docs/build'].join('/');
}else{
    cm._baseUrl = [cm._baseUrl, 'docs/build'].join('/');
}

cm._assetsUrl = cm._baseUrl;
App._assetsUrl = cm._assetsUrl;

cm.setParams('App.LoginBox', {
    'Com.Tooltip' : {
        'adaptiveX' : true,
        'adaptiveY' : true,
        'top' : 'targetHeight + 12'
    }
});

cm.setParams('App.Template', {
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
        'transformed' : true,
        'mobileFixed' : true,
        'mobileOverlapping' : true
    }
});

cm.setParams('App.ShutterstockManager', {
    'categoriesRequestParams' : {
        'ajax' : {
            'url' : '//quicksilk.magpie/shutterstock-api/images/categories'
        }
    },
    'paginationParams' : {
        'ajax' : {
            'url' : '//quicksilk.magpie/shutterstock-api/images/search/%page%'
        }
    }
});

cm.setParams('App.ImageInput', {
    'fileUploaderParams' : {
        'params' : {
            'stock' : true
        }
    }
});