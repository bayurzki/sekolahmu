<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>
<header>
    <nav class="navbar navbar-expand-sm bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <?php get_template_part( 'parts/header-branding' ); ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse header-nav" id="mynavbar">
                <form class="d-flex header-search">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary bg-white" type="button"><i class="fa fa-search"></i></button>
                </form>
                <ul class="navbar-nav me-auto header-link">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
</header>
