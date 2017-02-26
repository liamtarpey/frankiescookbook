(function() {
    'use strict';

    var SidebarComponent = function() {
        console.log('sidebar component');
    };

    SidebarComponent.$inject = [];
    app.component('sidebar', {
        templateUrl: 'wp-content/themes/frankiescookbook/statics/components/sidebar.template.html',
        controller: SidebarComponent,
        controllerAs: 'vm'
    });
})();
