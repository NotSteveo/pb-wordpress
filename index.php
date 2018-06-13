<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package penblade
 */

get_header();
?>
<div class="container-fluid"><div class="row my-3"><div class="col-sm-5 col-md-3 overlay-container"><div class="overlay-top"><div class="overlay-header-top">PenBlade is the safest scalpel on the market</div><hr class="splitter-top"><div class="overlay-content-top">Keep your staff safe with the best safety scalpel on the market.</div><div class="watch video"><a href="/">Watch the Video</a></div></div></div><div class="col-sm-12 col-md-9 hero"><img class="top-banner" src="/assets/Bitmap-f3b4a896f405b05342c4af38c0868092bdd350aad702bae5d03286a56b6a2d01.svg" alt="Bitmap"></div></div></div>


<?php
get_footer();
