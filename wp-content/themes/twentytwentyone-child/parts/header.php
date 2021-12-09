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
                    <li class="nav-item dropdown">
                        <a class="nav-link btn dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produk Lainnya
                        </a>
                        <div class="dropdown-menu nav-header-1" aria-labelledby="navbarDropdown">
                            <?php dynamic_sidebar( 'nav-header-1' ); ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link btn btn-rounded12 btn-tranparent dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jenjang
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php //dynamic_sidebar( 'jenjang-nav' ); ?>
                            <a class="dropdown-item" href="#">PAUD</a>
                            <a class="dropdown-item" href="#">SD</a>
                            <a class="dropdown-item" href="#">SMP</a>
                            <a class="dropdown-item" href="#">SMA/K</a>
                            <a class="dropdown-item" href="#">Orangtua</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-rounded50 btn-blue" href="javascript:void(0)">
                            <?php if (is_user_logged_in()) {
                                echo "Hello, ";
                            }else{
                                echo "Masuk | Daftar";
                            } 
                            ?>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
</header>
