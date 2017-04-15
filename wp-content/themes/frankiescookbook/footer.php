
<footer class="main-footer">
    FOOTER
<?php wp_footer(); ?>
</footer>

<script type="text/javascript">
    (function() {
        'use strict';

        var heroImage = document.getElementById('js-hero-latest');
        var searchPrompt = document.getElementById('js-header-prompt');
        var searchBar = document.getElementById('js-header-search-bar');
        var searchBarClose = document.getElementById('js-header-search-close');

        var stretchHeroImage = function() {

            if(!heroImage) return false;

            var appendHeight = function() {
                var clientHeight = document.documentElement.clientHeight;
                heroImage.style.height = clientHeight + 'px';
            };

            appendHeight();

            window.onresize = function() {
                appendHeight();
            }
        }();

        var searchBarHandler = function() {

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
</script>

<!-- <script src="<?php bloginfo('template_directory'); ?>/statics/scripts/scripts.js"></script> -->

</body>
</html>
