<footer class="main-footer">
    <div class="content-footer">


        <!---->
        <!--            <div class="bottom-menu">-->
        <!--                <ul class="b-menu__list">-->
        <!--                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Главная</a></li>-->
        <!--                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Полезная информация</a>-->
        <!--                    </li>-->
        <!--                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Последние акции</a></li>-->
        <!--                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">О сервисе</a></li>-->
        <!--                </ul>-->
        <!--            </div>-->

        <?php
        $args1 = [
            'theme_location' => 'botmenu',
            'container' => 'div',
            'container_class' => 'bottom-menu',
            'menu_class' => 'b-menu__list',
        ];

        wp_nav_menu($args1);

        ?>


        <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link">
                    loftschool <?php echo date('Y') ?></a></div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->

<?php wp_footer(); ?>
</body>
</html>
