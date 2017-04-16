(function() {
    'use strict';

    var stretchHeroImage = function() {
        var heroImage = document.getElementById('js-hero-latest');
        if(!heroImage) return false;

        var appendHeight = function() {
            var clientHeight = document.documentElement.clientHeight;
            heroImage.style.height = clientHeight + 'px';
        };

        appendHeight();

        window.onresize = function() {
            appendHeight();
        };
    }();
}());
