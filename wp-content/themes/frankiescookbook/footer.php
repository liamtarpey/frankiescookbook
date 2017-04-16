
<footer class="main-footer">
    <div class="wrapper">
        <div class="footer-sections">
            <div class="footer-sections__item">
                <span>Categories</span>
                <ul>
                    <?php
                        $args = array(
                            'title_li=',
                            'hide_empty' => 1,
                        );
                        wp_list_categories('title_li=');
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>

<script src="<?php bloginfo('template_directory'); ?>/statics/scripts/scripts.js"></script>

</body>
</html>
