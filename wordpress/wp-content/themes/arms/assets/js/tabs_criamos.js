const querySelectorAllEventListener = (query, event, callback) => {
    document.querySelectorAll(query).forEach(el => {
        el.addEventListener(event, (ev) => {
            callback(el, ev)
        });
    });
}

window.addEventListener('load', () => {
    let currentTab = 0;

    const tabIndicator = document.querySelector('.tab-indicator');
    const tabIndicatorClassList = [...tabIndicator.classList];
    const tabClasses = {
        active: ['text-arms-black', 'active'],
        inactive: ['text-arms-white', 'hover:bg-arms-black-700', 'inactive']
    }

    const setCurrentTab = (tab) => {
        currentTab = tab;
        document.querySelectorAll('[data-tab-parent]').forEach(el => el.classList.add('hidden'));
        const parentQuery = `0${currentTab+1}`;
        document.querySelectorAll(`[data-tab-parent="${parentQuery}"]`).forEach(el => el.classList.remove('hidden'));

        tabIndicator.classList = [...tabIndicatorClassList, `on-${currentTab}`].join(' ');

        const getTabClasses = (val) => (val == tab ? tabClasses.active : tabClasses.inactive);

        document.querySelectorAll('[data-tab-toggle]').forEach((el, elIndex) => {
            [...tabClasses['active'], ...tabClasses['inactive']].forEach(_class => {
                el.classList.remove(_class);
            });
            const classes = getTabClasses(elIndex);
            classes.forEach(_class => el.classList.add(_class));
            el.querySelector('svg').classList.remove('rotate-90');
            if(elIndex == currentTab) el.querySelector('svg').classList.add('rotate-90');
        })
    }

    querySelectorAllEventListener('[data-tab-toggle]', 'click', (el, ev) => {
        const tab = parseInt(el.getAttribute('data-tab-toggle')) - 1;
        setCurrentTab(tab);
    });

    setCurrentTab(0);
});