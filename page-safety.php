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

<style>

/* Slider Style
--------------------------------------*/
.cd-slider {
	position: relative;
	width: 100%;
	height: 30rem;
	overflow: hidden;
}
.cd-slider li {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	visibility: hidden;
	transition: visibility 0s 1s;
  will-change: visibility;
}
.image {
	position: absolute;
  right: 1rem;
  top: 0;
	width: 70%;
	height: 100%;
	background-size: cover;
	background-position: 50% 50%;
	clip: rect(0, 80rem, 50rem, 80rem);
	transition: clip .5s cubic-bezier(0.99, 0.01, 0.45, 0.9) .5s;
  will-change: clip;
}
.content {
  position: absolute;
  z-index: 9;
  left: 8rem;
  top: 6rem;
  width: 320px;
	/*top: 0;
	right: 0;
	width: 100%;
	height: 100%;
	padding: 2rem 0 0 2rem;
	font-size: 9rem;
	text-align: right;*/
}
.content h2 {
	text-overflow: ellipsis;
	overflow: hidden;
	transform: translateY(-30%);
	opacity: 0;
	transition: transform .5s, opacity .5s;
  will-change: transform, opacity;
}
.content a, .content p {
	display: inline-block;
	/*font-size: 2rem;
	text-transform: lowercase;
	padding: 1.5rem;*/
	opacity: 0;
	/*transform: translateY(-100%);*/
	transition: transform .5s .1s, opacity .5s .1s;
  will-change: transform, opacity;
}
.overlay-header-top {
  	opacity: 0;
  	overflow: hidden;
  color: #393A3B;
font-size: 27px;
letter-spacing: 0.95px;
word-spacing: .5px;
font-family: "Muli-Bold", sans-serif;
transition: transform .5s, opacity .5s;
will-change: transform, opacity;
	transform: translateY(-30%);
}
.splitter-top {
  opacity: 0;
	overflow: hidden;
  margin-top: 10%;
    margin-bottom: 10%;
    margin-right: 80%;
    transition: transform .5s, opacity .5s;
    will-change: transform, opacity;
    	transform: translateY(-30%);
}
.overlay-content-top {
  	opacity: 0;
  	overflow: hidden;
  letter-spacing: 0.95px;
word-spacing: .5px;
transition: transform .5s, opacity .5s;
will-change: transform, opacity;
	transform: translateY(-30%);
}
.watch.video {
  position: relative;
  bottom: -4rem;
  right: 0rem;
  margin-top: 0;
  	opacity: 0;
  	overflow: hidden;
transition: transform .5s, opacity .5s;
will-change: transform, opacity;
	transform: translateY(-30%);
}
/* Current Slide
-------------------------------------*/
li.current {
	visibility: visible;
	transition-delay: 0s;
}
li.current .image {
	clip: rect(0, 80rem, 50rem, 0);
}
li.current .content h2 {
	transform: translateY(0);
	opacity: 1;
	transition-delay: 1s;
}
li.current .content a {
	transform: translateY(0);
	opacity: 1;
	transition-delay: 1.1s;
}
li.current .content .overlay-content-top {
  transform: translateY(0);
  opacity: 1;
  transition-delay: 1.5s;
}
li.current .content .splitter-top {
  transform: translateY(0);
  opacity: 1;
  transition-delay: 1.7s;
}
li.current .content .watch.video {
  transform: translateY(0);
  opacity: 1;
  transition-delay: 1.9s;
}
/* Prev Slide

------------------------------------*/
li.prev_slide .image {
	clip: rect(0, 0, 50rem, 0);
}
nav {
	position: absolute;
	bottom: 0;
	right: 0;
	background: #fff;
	z-index: 2;
}
.prev, .next, .counter {
	vertical-align: middle;
}
.prev, .next {
	position: relative;
	display: inline-block;
	height: 5rem;
	width: 5rem;
  border: 0;
  cursor: pointer;
  background: transparent;
}
.prev::before, .next::before {
	content: '';
	position: absolute;
	top: 50%;
  left: 0;
	transform: translateY(-50%);
	border: .8rem solid transparent;
	border-right-width: 1rem;
	border-right-color: #000;
	border-left-width: 0;
	width: 0;
	height: 0;
}
.prev::after, .next::after {
	content: '';
	position: absolute;
	top: 50%;
	transform: translateY(-50%) translateZ(0);
	left: .5rem;
	background: #000;
	height: .1rem;
	min-height: 1px;
	width: 2.5rem;
	transition: width .3s;
}
.next::before {
	right: 0;
  left: auto;
	border-left-width: 1rem;
	border-left-color: #000;
	border-right-width: 0;
}
.next::after {
	right: .5rem;
	left: auto;
}
.counter {
	display: inline-block;
	font-size: 4rem;
	font-family: serif;
	font-style: italic;
}
.counter span:last-child::before {
	content: '/';
	margin: 0 1rem;
}
.prev:hover::after, .next:hover::after {
	width: 3.5rem;
}
@media screen and ( max-width: 550px ) {
	.image { width: 100%; }
	.content { padding-right: 2rem; }
	nav { left: 0; right: auto; }
}
.overlay-rotate {
  width: 450px;
      height: 350px;
      position: absolute;
      background-color: white;
      box-shadow: 4px 4px 24px 0 rgba(0, 0, 0, 0.07);
      border-radius: 5px;
      top: 3rem;
      left: 4rem;
      z-index: 9;
}
</style>


  <div class="cd-slider container-fluid">
    <div class="overlay-rotate" style=""></div>
    <ul>
      <li class="row">
        <div class="content">
          <h2 class="overlay-header-top">PenBlade is the safest scalpel on the market</h2>
           <hr class="splitter-top">
           <div class="overlay-content-top">Keep your staff safe with the best safety scalpel on the market.</div>
           <div class="watch video" style="">
						 <button type="button" class="video-button" data-toggle="modal" data-video="https://www.youtube.com/embed/hQBVH7GUx5A" data-target="#myModal">
						   Watch the video</button>
						 </div>
        </div>
        <div class="image" style="background-image:url(https://images.unsplash.com/photo-1421809313281-48f03fa45e9f?crop=entropy&fit=crop&fm=jpg&h=675&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1000);"></div>
      </li>
      <li class="row">

        <div class="content">
          <h2 class="overlay-header-top">PenBlade is the safest scalpel on the market 2</h2>
             <hr class="splitter-top">
             <div class="overlay-content-top">Keep your staff safe with the best safety scalpel on the market. 2</div>
         <div class="watch video" style="">
  				 <button type="button" class="video-button" data-toggle="modal" data-video="https://www.youtube.com/embed/hQBVH7GUx5A" data-target="#myModal">
  				   Watch the video</button>
  				 </div>
        </div>
        <div class="image" style="background-image:url(https://images.unsplash.com/uploads/1411724908903377d4696/2e9b0cb2?crop=entropy&fit=crop&fm=jpg&h=675&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1000);"></div>
      </li>
      <li class="row">

        <div class="content">
          <h2 class="overlay-header-top">PenBlade is the safest scalpel on the market 3</h2>
                           <hr class="splitter-top">
                           <div class="overlay-content-top">Keep your staff safe with the best safety scalpel on the market. 3</div>
        </div>
        <div class="image" style="background-image:url(https://images.unsplash.com/photo-1416838375725-e834a83f62b7?crop=entropy&fit=crop&fm=jpg&h=675&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1000);"></div>
      </li>
      <li class="row">

        <div class="content">
          <h2 class="overlay-header-top">PenBlade is the safest scalpel on the market 4</h2>
          		             <hr class="splitter-top">
          		             <div class="overlay-content-top">Keep your staff safe with the best safety scalpel on the market. 4</div>
        </div>
        <div class="image" style="background-image:url(https://images.unsplash.com/35/JOd4DPGLThifgf38Lpgj_IMG.jpg?crop=entropy&fit=crop&fm=jpg&h=675&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1000);"></div>
      </li>
      <li class="row">

        <div class="content">
          <h2 class="overlay-header-top">PenBlade is the safest scalpel on the market 5</h2>
          		             <hr class="splitter-top">
          		             <div class="overlay-content-top">Keep your staff safe with the best safety scalpel on the market. 5</div>
        </div>
        <div class="image" style="background-image:url(https://images.unsplash.com/photo-1453974336165-b5c58464f1ed?crop=entropy&fit=crop&fm=jpg&h=675&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1000);"></div>
      </li>
    </ul>
  </div> <!--/.cd-slider-->








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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
         <div class="features-header-text-container col-lg-5">
            <div class="features-header-text">
               <h1 class="features-header-large-text"><?php the_sub_field('page_title'); ?></h1>
               <hr class="features-splitter-top">
               <div class="features-header-small-text">
                  <p><?php the_sub_field('page_caption'); ?></p>
               </div>
               <hr class="features-splitter-top">
               <div class="features-header-watch-video-wrapper">
                  <button type="button" class="video-button" data-toggle="modal" data-video="<?php the_sub_field('page_video_url'); ?>" data-target="#myModal" >
                    <?php the_sub_field('page_link_text'); ?>
                  </button>
               </div>
            </div>
         </div>
         <div class="features-penknife-image col-lg-7"><?php $page_hero_image = get_sub_field('page_hero_image'); ?>
         <img class="Penknife features" src="<?php echo $page_hero_image['url']; ?>" alt="<?php echo $page_hero_image['alt']; ?>"></div>
      </div>
   </div>
</div>
<?php endif; ?>
<?php endwhile; ?><!--end features module -->
<?php endif; ?>

<?php
	if( have_rows('main_modules') ):
		while ( have_rows('main_modules') ) : the_row();
		if (get_row_layout() == 'hero' ): ?>
			<?php if( have_rows('hero_field') ): ?>
				<section class="container-fluid">
					<div class="row my-3">
					<?php while( have_rows('hero_field') ): the_row(); ?>
						<div class="col-sm-5 col-md-3 overlay-container">
							<div class="overlay-top">
		             <div class="overlay-header-top"><?php the_sub_field('hero_title'); ?></div>
		             <hr class="splitter-top">
		             <div class="overlay-content-top"><?php the_sub_field('hero_subtitle'); ?></div>
		             <div class="watch video">

									 <button type="button" class="video-button" data-toggle="modal" data-video="<?php the_sub_field('hero_video_url'); ?>" data-target="#myModal" >
									   <?php the_sub_field('hero_video_link_text'); ?>
									 </button>

									 </div>
		          </div>
		       </div>
		       <div class="col-sm-12 col-md-9 hero"><?php $hero_image = get_sub_field('hero_image'); ?>
					 <img class="top-banner" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
						 <?php endwhile; ?></div>
		    </div>
					</section>
					<?php endif; ?>
					<!-- 4 cards -->
				<?php elseif (get_row_layout() == 'featured_text' ): ?>
						<?php if( have_rows('featured_collection') ): ?>
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
										<?php endwhile; ?>
										<?php while( have_rows('featured_cta_button') ): the_row(); ?>
											<div class="request-sample-container">
												<a href="<?php the_sub_field('featured_cta_link'); ?>" data-toggle="modal" data-target="#exampleModal"><span class="button-chev"><?php the_sub_field('featured_cta'); ?></span></a>


											</div>
											<?php endwhile; ?>

									</div>
								</section>
								<?php endif; ?>
								<!-- 4 cards -->
                <!-- 3 cards -->
              <?php elseif (get_row_layout() == 'featured_text_three' ): ?>
                  <?php if( have_rows('featured_collection') ): ?>
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
                          <?php endwhile; ?>
                          <?php while( have_rows('featured_cta_button') ): the_row(); ?>
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
						<?php if( have_rows('homepage_video') ): ?>
						<div class="col-sm-12 col-lg-4 video-banner embed-responsive embed-responsive-4by3">
							 <?php while( have_rows('homepage_video') ): the_row(); ?>
                 <button type="button" class="video-button" data-toggle="modal" data-video="<?php the_sub_field('video_url'); ?>" data-target="#myModal">
                   <img src="<?php bloginfo('template_url')?>/images/play.svg">
                 </button>
							 <?php $video_file = get_sub_field('video_file'); ?>
							 <?php $video_cover = get_sub_field('video_cover'); ?>
							 <video class="embed-responsive-item" autoplay="autoplay" loop="loop" muted="muted" src="<?php echo $video_file ?>" cover="<?php echo $video_cover['url']; ?>"></video>
               <img class="safety-img" src="<?php echo $video_cover['url']; ?>">

						</div>
						<?php endwhile; ?>
					<?php endif; ?>
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
					<?php endwhile; ?>
				<?php endif; ?>
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
				<?php endwhile; ?>
			<?php endif; ?>
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
<?php elseif (get_row_layout() == 'show_featured_posts' ): ?>
  <?php if( get_sub_field('show_featured') ): ?>
    <?php
       // the query
       $the_query = new WP_Query( array(
         'category_name' => 'featured',
          'posts_per_page' => 3,
       ));
    ?>
    <?php if( get_field('show_featured') ): ?>

    	<?php // do something ?>

    <?php endif; ?>
    <?php if ( $the_query->have_posts() ) : ?>
      <div class="blog-wrapper">
        <section class="container-fluid blog-roll">
          <div class="more-title">More from PenBlade</div>
          <div class="row">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="col-sm-12 col-md-4 bottom-image">
        <div class="image">
        <?php $main_image = get_field('main_image'); ?>
    <a href="<?php the_permalink(); ?>"><img class="bottom-image" src="<?php echo $main_image['url'] ?>" alt="<?php echo $main_image['alt'] ?>"></a>
        </div>

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

<!--test2-->
		<?php endif; ?>
	<?php endwhile; ?><!--end features module -->
<?php endif; ?> <!-- end main module-->

<script>
$( document ).ready(function() {
  (function() {

  	function init(item) {
  		var items = item.querySelectorAll('li'),
          current = 0,
          autoUpdate = true,
          timeTrans = 7000;

  		//create nav
  		var nav = document.createElement('nav');
  		nav.className = 'nav_arrows';

  		//create button prev
  		var prevbtn = document.createElement('button');
  		prevbtn.className = 'prev';
  		prevbtn.setAttribute('aria-label', 'Prev');

  		//create button next
  		var nextbtn = document.createElement('button');
  		nextbtn.className = 'next';
  		nextbtn.setAttribute('aria-label', 'Next');

  		//create counter
  		var counter = document.createElement('div');
  		counter.className = 'counter';
  		counter.innerHTML = "<span>1</span><span>"+items.length+"</span>";

  		if (items.length > 1) {
  			nav.appendChild(prevbtn);
  			nav.appendChild(counter);
  			nav.appendChild(nextbtn);
  			item.appendChild(nav);
  		}

  		items[current].className = "current";
  		if (items.length > 1) items[items.length-1].className = "prev_slide";

  		var navigate = function(dir) {
  			items[current].className = "";

  			if (dir === 'right') {
  				current = current < items.length-1 ? current + 1 : 0;
  			} else {
  				current = current > 0 ? current - 1 : items.length-1;
  			}

  			var	nextCurrent = current < items.length-1 ? current + 1 : 0,
  				prevCurrent = current > 0 ? current - 1 : items.length-1;

  			items[current].className = "current";
  			items[prevCurrent].className = "prev_slide";
  			items[nextCurrent].className = "";

  			//update counter
  			counter.firstChild.textContent = current + 1;
  		}

      item.addEventListener('mouseenter', function() {
  			autoUpdate = false;
  		});

  		item.addEventListener('mouseleave', function() {
  			autoUpdate = true;
  		});

  		setInterval(function() {
  			if (autoUpdate) navigate('right');
  		},timeTrans);

  		prevbtn.addEventListener('click', function() {
  			navigate('left');
  		});

  		nextbtn.addEventListener('click', function() {
  			navigate('right');
  		});

  		//keyboard navigation
  		document.addEventListener('keydown', function(ev) {
  			var keyCode = ev.keyCode || ev.which;
  			switch (keyCode) {
  				case 37:
  					navigate('left');
  					break;
  				case 39:
  					navigate('right');
  					break;
  			}
  		});

  		// swipe navigation
  		// from http://stackoverflow.com/a/23230280
  		item.addEventListener('touchstart', handleTouchStart, false);
  		item.addEventListener('touchmove', handleTouchMove, false);
  		var xDown = null;
  		var yDown = null;
  		function handleTouchStart(evt) {
  			xDown = evt.touches[0].clientX;
  			yDown = evt.touches[0].clientY;
  		};
  		function handleTouchMove(evt) {
  			if ( ! xDown || ! yDown ) {
  				return;
  			}

  			var xUp = evt.touches[0].clientX;
  			var yUp = evt.touches[0].clientY;

  			var xDiff = xDown - xUp;
  			var yDiff = yDown - yUp;

  			if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
  				if ( xDiff > 0 ) {
  					/* left swipe */
  					navigate('right');
  				} else {
  					navigate('left');
  				}
  			}
  			/* reset values */
  			xDown = null;
  			yDown = null;
  		};


  	}

  	[].slice.call(document.querySelectorAll('.cd-slider')).forEach( function(item) {
  		init(item);
  	});

  })();
});
</script>
<?php
get_footer();
