<?php
/**
 * The Header for our theme.
 *
 * @package Hood
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <nav>
    <div class="hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <img src="#" alt="Hood Studios logo">

    <ul class="nav-links">
      <li><a href="#">Portfolio</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Quem somos</a></li>
      <li><button class="button--primary">Contate-nos</button>
    </ul>
  </nav>
</header>

<main>
