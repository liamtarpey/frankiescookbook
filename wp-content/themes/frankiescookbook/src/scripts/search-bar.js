(function() {
    'use strict';

    var searchBarHandler = function() {

        var searchPrompt = document.getElementById('js-header-prompt');
        var searchBar = document.getElementById('js-header-search-bar');
        var searchBarClose = document.getElementById('js-header-search-close');

        var showSearchBar = function() {
            searchBar.classList.add('header__search-bar--active');
        };

        var hideSearchBar = function() {
            searchBar.classList.remove('header__search-bar--active');
        };

        searchPrompt.addEventListener('click', showSearchBar);
        searchBarClose.addEventListener('click', hideSearchBar);
    }();
}());
