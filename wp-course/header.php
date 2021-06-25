<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
        <div class="container">
            <div class="header__body">
                <div class="header__logo logo"> Don`t <span class="colortext">do</span> it </div>
                <div class="header__burger" id="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <a href="#box" class="menu__link js-menu-item"> Что будет на курсе?</a>
                    <a href="#questions" class="menu__link js-menu-item"> Вопросы</a>
                    <a href="#author" class="menu__link js-menu-item"> Автор</a>
                    <button href="#popup" class="menu__button button js_button"> Записаться на курс</button>
                </nav>
            </div>
        </div>
    </header>