<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package penblade
 */

get_header();
?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PenBlade Features</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
         </button>
      </div>
      <div class="modal-body">

        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always">></iframe>
</div>


      </div>

    </div>
  </div>
</div>

<!-- Contact Us Modal -->
<div class="modal fade modal-request" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
         </button>
      </div>
      <div class="modal-body">
        <div class="contact-form-card-modal">
           <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

              <input name="oid" type="hidden" value="00D1I000002Mber"><input name="retURL" type="hidden" value="http://www.penblade.com">
              <div class="form-row">
                 <div class="form-group facility"><label for="facility"> Facility</label><input class="form-control" id="facility" maxlength="40" name="facility" required="true" size="20" type="text" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"></div>
                 <div class="form-group city"><label for="city"> City</label><input class="form-control" id="city" maxlength="40" name="city" required="true" size="20" type="text"></div>
                 <div class="form-group state"><label for="state"> State</label><input class="form-control" id="state" maxlength="20" name="state" required="true" size="20" type="text"></div>
              </div>
              <div class="form-row">
                 <div class="form-group first_name"><label for="first_name"> First Name</label><input class="form-control" id="first_name" maxlength="40" name="first_name" size="20" type="text"></div>
                 <div class="form-group last_name"><label for="last_name"> Last Name</label><input class="form-control" id="last_name" maxlength="80" name="last_name" size="20" type="text"></div>
                 <div class="form-group title"><label for="title"> Title</label><input class="form-control" id="title" maxlength="40" name="title" size="20" type="text"></div>
              </div>
              <div class="form-row">
                 <div class="form-group phone"><label for="phone"> Phone</label><input class="form-control" id="phone" maxlength="40" name="phone" size="20" type="text"></div>
                 <div class="form-group email"><label for="email"> Email</label><input class="form-control" id="email" maxlength="80" name="email" size="20" type="email"></div>
              </div>
              <div class="form-row">
                 <div class="form-group more-about-us"><label>More about us</label><textarea class="form-control" id="00N1I00000Dyq7J" maxlength="255" name="00N1I00000Dyq7J" size="20" type="text"></textarea></div>
              </div>
              <input class="btn purple center" name="submit" type="submit">
              <h4 class="form-info">This form will submit through email.</h4>
              <h4 class="form-info">You will be contacted shortly.</h4>
           </form>
        </div>

        </form>
          <script>  document.getElementById('phone').addEventListener('input', function (e) {
              var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
              e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
            });</script>
      </div>
    </div>
  </div>
</div>

<?php
  if( have_rows('page_hero') ):
  while ( have_rows('page_hero') ) : the_row();
  if (get_row_layout() == 'page_text_image' ): ?>
<div class="features-hero">
   <div class="container-fluid">
      <div class="row features-header no-margin">
         <div class="features-header-text-container col-md-5 order-1 order-md-1 col-lg-5">
            <div class="features-header-text">
               <h1 class="features-header-large-text"><?php the_sub_field('page_title'); ?></h1>
               <hr class="features-splitter-top">
               <div class="features-header-small-text">
                  <p><?php the_sub_field('page_caption'); ?></p>
               </div>
               <hr class="features-splitter-top">
               <div class="features-header-watch-video-wrapper">
                  <button type="button" class="btn-white-video video-button" data-toggle="modal" data-video="<?php the_sub_field('page_video_url'); ?>" data-target="#myModal" >
                    <?php the_sub_field('page_link_text'); ?>
                  </button>
               </div>
            </div>
         </div>
         <div class="features-penknife-image col-sm-12 order-md-2 col-md-7"><?php $page_hero_image = get_sub_field('page_hero_image'); ?>
         <img class="Penknife features" src="<?php echo $page_hero_image['url']; ?>" alt="<?php echo $page_hero_image['alt']; ?>"></div>
      </div>
   </div>
</div>
<?php endif; ?>

<?php if (get_row_layout() == 'page_text_form' ): ?>
<div class="features-hero">
   <div class="container-fluid">
      <div class="row features-header no-margin">
         <div class="features-header-text-container col-md-5 order-1 order-md-1 col-lg-5">
            <div class="features-header-text">
               <h1 class="features-header-large-text"><?php the_sub_field('page_title'); ?></h1>
               <hr class="features-splitter-top">
               <div class="features-header-small-text">
                  <p><?php the_sub_field('page_caption'); ?></p>
               </div>

               <div class="features-header-watch-video-wrapper">
                  <button type="button" class="video-button" data-toggle="modal" data-video="<?php the_sub_field('page_video_url'); ?>" data-target="#myModal" >
                    <?php the_sub_field('page_link_text'); ?>
                  </button>
               </div>
            </div>
         </div>
         <div class="features-penknife-image col-sm-12 order-md-2 col-md-7">
            <?php the_sub_field('page_form'); ?>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>
<?php if (get_row_layout() == 'page_text_cards' ): ?>
  <div class="features-hero">
     <div class="container-fluid">
        <div class="row features-header no-margin downloads">
           <div class="features-header-text-container col-md-5 order-1 order-md-1 col-lg-5">
              <div class="features-header-text">
                 <h1 class="features-header-large-text"><?php the_sub_field('page_title'); ?></h1>
                 <hr class="features-splitter-top">
                 <div class="features-header-small-text">
                    <p><?php the_sub_field('page_caption'); ?></p>
                 </div>
              </div>
           </div>
           <div class="download col-sm-12 order-md-2 col-md-7">
              <div class="download-container">
                 <h2><?php the_sub_field('page_card_left_title'); ?></h2>
                 <hr class="resources-splitter-top">
                 <p><?php the_sub_field('page_card_left_caption'); ?></p>
                <div class="link-container">
                 <a href="<?php the_sub_field('page_card_left_link'); ?>" target="_blank"><span class="button-chev-blue"><?php the_sub_field('page_card_left_link_title'); ?></span></a>
               </div>
              </div>
              <div class="download-container">
                 <h2><?php the_sub_field('page_card_right_title'); ?></h2>
                 <hr class="resources-splitter-top">
                 <p><?php the_sub_field('page_card_right_caption'); ?></p>

                <div class="link-container">
                 <a href="<?php the_sub_field('page_card_right_link'); ?>" target="_blank"><span class="button-chev-blue"><?php the_sub_field('page_card_right_link_title'); ?></span></a>
               </div>
              </div>
           </div>
        </div>
     </div>
  </div>
<?php endif; endwhile; ?><!--end features module -->
<?php endif; ?>

<?php
  if( have_rows('main_modules') ):
  while ( have_rows('main_modules') ) : the_row();
  if (get_row_layout() == 'hero' ): if( have_rows('hero_field') ): ?>
        <div class="cd-slider container-fluid">
          <div class="overlay-rotate" style=""></div>
          <ul class="slides">
            <?php while( have_rows('hero_field') ): the_row(); ?>
            <li>
              <div class="content">
                <h2 class="overlay-header-top"><?php the_sub_field('hero_title'); ?></h2>
                 <hr class="splitter-top">
                 <div class="overlay-content-top"><?php the_sub_field('hero_subtitle'); ?></div>
                 <div class="watch video" style="">
                   <button type="button" class="video-button" data-toggle="modal" data-video="<?php the_sub_field('hero_video_url'); ?>" data-target="#myModal" >
                     <?php the_sub_field('hero_video_link_text'); ?>
                   </button>
                   </div>
              </div>
              <?php $hero_image = get_sub_field('hero_image'); ?>
              <div class="image" style="background-image:url(<?php echo $hero_image['url']; ?>);"></div>
            </li>
<?php endwhile; ?>
          </ul>
        </div> <!--/.cd-slider-->
  <?php endif; ?>
  <!-- 4 cards -->
  <?php elseif (get_row_layout() == 'featured_text' ): if( have_rows('featured_collection') ): ?>
  <section class="container-fluid">
  <div class="row values">
  <?php while( have_rows('featured_collection') ): the_row(); ?>
  <div class="col-sm-6 col-lg-3 value-point-container">
  <?php $featured_image = get_sub_field('featured_image'); ?>
  <div class="value-point">
  <div class="value-point-title my-3">
           <div class="image"><img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>"></div>
  <h2 class="text"><?php the_sub_field('featured_title'); ?></h2></div>
  <hr class="value-splitter">

  <div class="value-point-content my-3">
                 <p class="text"><?php the_sub_field('featured_description'); ?></p></div>

  </div>
  </div>
  <?php endwhile; while( have_rows('featured_cta_button') ): the_row(); ?>
  <div class="request-sample-container">

  <a href="<?php the_sub_field('featured_cta_link'); ?>"><span class="button-chev"><?php the_sub_field('featured_cta'); ?></span></a>


  </div>
  <?php endwhile; ?>

  </div>
  </section>
  <?php endif; ?>
  <!-- 4 cards -->
                <!-- 3 cards -->
              <?php elseif (get_row_layout() == 'featured_text_three' ): if( have_rows('featured_collection') ): ?>
                    <section class="container-fluid">
                      <div class="row values">
                      <?php while( have_rows('featured_collection') ): the_row(); ?>
                          <div class="col-sm-4 col-lg-4 value-point-container">
                        <?php $featured_image = get_sub_field('featured_image'); ?>
                        <div class="value-point">
                        <div class="value-point-title my-3">
                           <div class="image"><img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>"></div>
                            <h2 class="text"><?php the_sub_field('featured_title'); ?></h2></div>
                            <hr class="value-splitter">

                            <div class="value-point-content my-3">
                              <p class="text"><?php the_sub_field('featured_description'); ?></p></div>

                          </div>
                        </div>
                          <?php endwhile; while( have_rows('featured_cta_button') ): the_row(); ?>
                            <div class="request-sample-container">
                              <a href="<?php the_sub_field('featured_cta_link'); ?>" data-toggle="modal" data-target="#exampleModal"><span class="button-chev"><?php the_sub_field('featured_cta'); ?></span></a>


                            </div>
                            <?php endwhile; ?>

                        </div>
                      </section>
                      <?php endif; ?>
                      <!-- 3 cards -->

  <?php elseif (get_row_layout() == 'homepage_links_to_pages' ): ?>
  <section class="container-fluid cards-container">
  <div class="row resources m-auto">
  <?php if( have_rows('homepage_video') ): while( have_rows('homepage_video') ): the_row(); ?>
              <?php $video_gif = get_sub_field('video_gif'); ?>
  <div class="col-sm-12 col-lg-4 video-banner embed-responsive embed-responsive-4by3" style="background: url(<?php echo $video_gif['url']; ?>) no-repeat center center; background-size: cover;">

                 <button type="button" class="video-button" data-toggle="modal" data-video="<?php the_sub_field('video_url'); ?>" data-target="#myModal">
                   <img src="<?php bloginfo('template_url')?>/images/play.svg">
                 </button>

  </div>
  <?php endwhile; endif; ?>
  <?php if( have_rows('red_card') ): ?>
  <div class="col-md-6 col-lg-3 card-container">
  <?php while( have_rows('red_card') ): the_row(); ?>
   <div class="card red">
  <h2 class="card-title"> <?php the_sub_field('red_card_title'); ?></h2>
  <hr class="card-splitter how-to-order-splitter">
  <p class="card-content"><?php the_sub_field('red_card_body'); ?></p>
  <div class="card-link"><a href="<?php the_sub_field('red_card_link_url'); ?>"><span class="button-chev"><?php the_sub_field('red_card_link_text'); ?></span></a> </div>
   </div>
  </div>
  <?php endwhile; endif; ?>
  <?php if( have_rows('blue_card') ): ?>
  <div class="col-md-6 col-lg-3 card-container blue resource-container">
  <?php while( have_rows('blue_card') ): the_row(); ?>
   <div class="card resource">
  <h2 class="card-title resource-title"> <?php the_sub_field('blue_card_title'); ?></h2>
  <hr class="card-splitter resource-splitter">
  <p class="card-content resource-content"><?php the_sub_field('blue_card_body'); ?></p>
  <div class="card-link order-here"><a href="<?php the_sub_field('blue_card_link_url'); ?>"><span class="button-chev"><?php the_sub_field('blue_card_link_text'); ?></span></a> </div>
   </div>
  </div>
  <?php endwhile; endif; ?>
  </div>
  </section>
  <!-- end cards module-->

  <?php elseif (get_row_layout() == 'accreditation' ): ?>
  <section class="container-fluid">
  <div class="row testimonials">
  <?php if( have_rows('accreditation_field') ): ?>
  <div class="col-sm-12 col-md-6 accredidation">
  <?php while( have_rows('accreditation_field') ): the_row(); ?>

  <?php $accreditation_image = get_sub_field('accreditation_image'); ?>
         <div class="comment">
            <div class="avatar-container"><img src="<?php echo $accreditation_image['url'] ?>" alt="<?php echo $accreditation_image['alt'] ?>"></div>
   <div class="content-container">
  <div class="name-container">
   <div class="name"><?php the_sub_field('accreditation_name'); ?></div>
   <div class="accredidation"><?php the_sub_field('accreditation_title'); ?></div>
  </div>
  <div class="text"><?php the_sub_field('accreditation_quote'); ?></div>
   </div>
  </div>

  <?php endwhile; ?>
  </div>
  <?php endif; ?>

  <?php if( have_rows('extra_links') ): ?>
   <div class="col-sm-12 col-md-6 another-point">
  <?php while( have_rows('extra_links') ): the_row(); ?>
  <?php $extra_icon = get_sub_field('extra_icon'); ?>

  <div class="comment">
           <div class="container-text">
              <div class="image"><img src="<?php echo $extra_icon['url'] ?>" alt="<?php echo $extra_icon['alt'] ?>"></div>
  <div class="text-container">
                 <div class="text">
   <?php the_sub_field('extra_caption'); ?></div>
                 <hr class="comment-splitter">
              </div>
           </div>
           <div class="link"><a href="<?php the_sub_field('extra_link'); ?>"><span class="button-chev-blue"><?php echo the_sub_field('extra_cta'); ?></span></a></div>
        </div>

  <?php endwhile; ?>
  </div>

  <?php endif; ?>
  </div>
  </section> <!-- end accredidation -->

<?php elseif (get_row_layout() == 'case_study' ): ?>
  <div class="case-study">
     <div class="container-fluid">
        <div class="row">
           <div class="col-sm-12 col-md-6 cut-padding">
             <a href="<?php the_permalink(); ?>">
               <?php $main_image = get_sub_field('main_image'); ?>
             <div class="group-image" style="background: url(<?php echo $main_image['url'] ?>) no-repeat center center; background-size: cover;"></div></a>
   <?php $case_study_image = get_sub_field('case_study_image'); ?>
   <img class="group-image" src="<?php echo $case_study_image['url'] ?>" alt="<?php echo $case_study_image['alt'] ?>"></div>
           <div class="col-sm-12 col-md-6 cut-padding">
              <div class="white">
                 <div class="overlay">
                    <div class="overlay-header"><?php the_sub_field('case_study_title'); ?></div>
                    <hr class="splitter">
                    <div class="overlay-content"><?php the_sub_field('case_study_caption'); ?>
  <div class="link-container"><a href="<?php the_sub_field('case_study_link'); ?>"><span class="button-chev-blue"><?php echo the_sub_field('case_study_link_text'); ?></a></div> </div>
                 </div>
              </div>
              <div class="orange"></div>
           </div>
        </div>
     </div>
  </div>

  <!--test-->
<?php elseif (get_row_layout() == 'show_featured_posts' ): if( get_sub_field('show_featured') ):
       // the query
       $the_query = new WP_Query( array(
         'category_name' => 'featured',
          'posts_per_page' => 3,
       ));
    ?>

    <?php if ( $the_query->have_posts() ) : ?>
      <div class="blog-wrapper">
        <section class="container blog-roll">
          <div class="more-title">More from PenBlade</div>
          <div class="row">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="col-sm-12 col-md-4 bottom-image">


          <?php
            if( have_rows('left_sidebar') ):
              while ( have_rows('left_sidebar') ) : the_row();
              if (get_row_layout() == 'left_sidebar_blog' ): ?>
              <a href="<?php the_permalink(); ?>">
                <?php $main_image = get_sub_field('main_image'); ?>
              <div class="image" style="background: url(<?php echo $main_image['url'] ?>) no-repeat center center; background-size: cover;"></div></a>
              <?php endif; ?>
              <?php endwhile; ?>
              <?php endif; ?>

    <div class="more-sub">
      <div class="more-sub-title"><?php the_title(); ?></div>
        <div class="more-sub-content"><?php the_excerpt(); ?></div>
          <div class="more-link"><a href="<?php the_permalink(); ?>" class="link"><span class="button-chev-red">Read More</span></a>
          </div>
        </div>
      </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </section>
      </div>
    </div>
    <?php else : ?>

    <?php endif; ?>
    <!-- end blog -->
<?php else : ?>

<?php endif; ?>




<?php elseif (get_row_layout() == 'show_featured_posts_list' ): if( get_sub_field('show_featured_list') ):
       // the query
       $the_query = new WP_Query( array(
         'category_name' => 'resources',
          'posts_per_page' => 3,
       ));
    ?>

    <?php if ( $the_query->have_posts() ) : ?>
      <div class="resources">
        <section class="resources-container container">
          <div class="col-md-12 col-md-6 offset-md-5 title">
            <h4>More from PenBlade</h4>
          </div>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <div class="row resources-blog justify-content-md-center">
            <div class="col-sm-12 col-md-4 image">
              <?php
                if( have_rows('left_sidebar') ):
                  while ( have_rows('left_sidebar') ) : the_row();
                  if (get_row_layout() == 'left_sidebar_blog' ): ?>
              <?php $main_image = get_sub_field('main_image'); ?>
                <a href="<?php the_permalink(); ?>"><img class="bottom-image" src="<?php echo $main_image['url'] ?>" alt="<?php echo $main_image['alt'] ?>">
                </a>
                  <?php endif; endwhile; endif; ?>
            </div>
            <div class="col-sm-12 col-md-6 post">
              <h4><?php the_title(); ?></h4>
              <hr class="resources-splitter-top"><?php the_excerpt(); ?>
              <div class="read">
                <hr class="resources-link">
                <a class="button-chev-blue" href="<?php the_permalink(); ?>">Read More</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </section>
    </div>
    <?php else : ?>

    <?php endif; ?>
    <!-- end blog -->
<?php else : ?>

<?php endif; ?>


<!--test2-->
  <?php endif; endwhile; ?><!--end features module -->
<?php endif; ?> <!-- end main module-->


<?php
get_footer();
