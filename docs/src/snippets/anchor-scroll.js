(function() {
    new cm.Finder('Module.Anchor', null, null, anchor => {
        const processLink = (link) => {
            try {
                const url = new URL(link.href);
                const href = url.origin + url.pathname + url.search;
                const locationHref = location.origin + location.pathname + location.search;
            } catch (e) {
                return;
            }
            if (href === locationHref) {
                cm.click.add(link, setAnchor);
            }
        };

        const setAnchor = (event) => {
            cm.preventDefault(event);
            const href = event.target.href;
            window.history.pushState({}, '', href);
            anchor.prepareHash()
        };

        const links = document.body.querySelectorAll(`a[href$="#${ anchor.getParams('name') }"]`);
        links.forEach(processLink);
    }, {multiple: true});
})();