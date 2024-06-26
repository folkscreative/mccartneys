<?php get_header();?>
<main class="home page-wrap">
    <!-- Banner -->
    <section class="banner">
        <div class="container">
            <div class="row g-0 align-items-center">
            <div class="col-12 col-lg-5">
                <div class="col-left">
                    <?php if( get_field('banner_main_title') ): ?>
                        <h1><?php the_field('banner_main_title'); ?></h1>
                    <?php endif; ?>
                    <?php if( get_field('banner_description') ): ?>
                    <p><?php the_field('banner_description'); ?></p>
                    <?php endif; ?>
                    <?php 
                        $link = get_field('home_banner_button');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn-bn-light" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><span><i class="fa-solid fa-angle-right"></i></span></a>
                        <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="col-right">
                <?php 
                $banner_img = get_field('main_banner_image');
                if( !empty($banner_img) ): ?>
                    <img src="<?php echo $banner_img['url']; ?>" alt="<?php echo $banner_img['alt']; ?>" />
                <?php endif; ?>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Banner ends -->

    <!-- filter ends -->
    <section class="home-filter-cs">
        <div class="container">
            <form class="inner">
                <div class="btn filter-btn">
                    <a class="active">Buy</a>
                    <a>Rent</a>
                </div>
                <div class="middle-col"> 
                    <div class="item">
                    <input type="search" placeholder="Location">
                    </div>
                    <div class="item">
                    <select>
                        <option>Search radius</option>
                        <option>Radius one</option>
                        <option>Radius two</option>
                    </select>
                    </div>
                    <div class="item">
                    <select>
                        <option>Search radius</option>
                        <option>Radius one</option>
                        <option>Radius two</option>
                    </select>
                    </div>
                </div>
                <div class="search-btn">
                    <a href="#" class="btn-cs-dark">Search</a>
                </div>
            </form>
        </div>
    </section>
    <!-- filter ends -->

    <!-- Departments -->
     <section class="departments">
        <div class="container">
            <div class="content">
                <?php if( get_field('mccartneys_department_title') ): ?>
                        <h2><?php the_field('mccartneys_department_title'); ?></h2>
                    <?php endif; ?>
                    <?php if( get_field('mccartneys_department_description') ): ?>
                        <p><?php the_field('mccartneys_department_description'); ?></p>
                    <?php endif; ?>
            </div>
            <?php if( have_rows('cartneys_department_slider') ): ?>
            <div class="depart-slider depar">
            <?php while( have_rows('cartneys_department_slider') ): the_row(); ?>
            <div class="slide-wrap">
            <?php
                $slider_bg_image = get_sub_field('cartneys_department_thumnail');
                if( !empty($slider_bg_image) ):?>
                <img src="<?php echo $slider_bg_image['url']; ?>" alt="<?php echo $slider_bg_image['alt']; ?>">
                <?php endif; ?>
                <div class="inner-content">
                    <h3><?php the_sub_field('cartneys_department_title'); ?></h3>
                    <p><?php the_sub_field('cartneys_department_description'); ?></p>
                    <?php 
                        $cartneys_slider_link = get_sub_field('cartneys_slider_button');
                        if( $cartneys_slider_link ): 
                            $cartneys_slider_link_url = $cartneys_slider_link['url'];
                            $cartneys_slider_link_title = $cartneys_slider_link['title'];
                            $cartneys_slider_link_target = $cartneys_slider_link['target'] ? $cartneys_slider_link['target'] : '_self';
                            ?>
                            <a class="btn-cs-light" href="<?php echo esc_url( $cartneys_slider_link_url ); ?>" target="<?php echo esc_attr( $cartneys_slider_link_target ); ?>"><?php echo esc_html( $cartneys_slider_link_title ); ?><span><i class="fa-solid fa-angle-right"></i></span></a>
                        <?php endif; ?>
                </div>
                </div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>                     
        </div>
     </section>
     <!-- Departments ends -->

    <!-- Start Property section here -->
     <section class="property-wrapper">
        <div class="container">
            <h2 class="title"><?php the_field('our_locatinos_title'); ?></h2>
            <p class="description"><?php the_field('our_location_description'); ?></p>
            <?php echo do_shortcode('[property_tabs]'); ?>
        </div>
     </section>
    <!-- End Property section here -->


    <!-- recent property section start here -->
     <section class="recent-property-wrapper">
        <div class="container">
        <?php echo do_shortcode('[recent_property_tabs]'); ?>
        <a href="#" class="btn-cs-dark">View all properties</a>
        </div>
     </section>
     <!-- recent property section ends here -->
  
      <!-- Testimonials -->
       <section class="testimonials">
         <div class="container"> 
            <div class="testimonial-box">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/icon-apostrophe.png" alt="">
            </div>
            <?php if( get_field('home_testimonial_title') ): ?>
                <h2 class="title"><?php the_field('home_testimonial_title'); ?></h2>
            <?php endif; ?>

            <?php if( have_rows('home_testimonial_slider') ): ?>
            <div class="testimonial-slider wrapper">
            <?php while( have_rows('home_testimonial_slider') ): the_row(); ?>
            <div class="item">
                <?php
                $rating_img = get_sub_field('testimonial_rating_image');
                if( !empty($rating_img) ):?>
                <img src="<?php echo $rating_img['url']; ?>" alt="<?php echo $rating_img['alt']; ?>">
                <?php endif; ?>
                <p><?php the_sub_field('home_testimonial_description'); ?></p>
                <div class="inner-box">
                <?php
                $author_img = get_sub_field('home_testimonial_author_image');
                if( !empty($author_img) ):?>
                <img src="<?php echo $author_img['url']; ?>" alt="<?php echo $author_img['alt']; ?>">
                <?php endif; ?>
                <div class="position">
                    <h4><?php the_sub_field('home_testimonial_author_title'); ?></h4>
                    <span><?php the_sub_field('home_testimonial_author_designation');?></span>
                </div>
                </div>
                </div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>  
         </div>
       </section>
        <!-- Testimonials ends -->
         
        <!-- Cta banner -->
        <section class="cta-banner">
          <div class="container">
          <?php
            $cta_box_bg = get_field('cta_home_background_image');
            if( !empty($cta_box_bg) ):?>
            <div class="row g-0 align-items-center" style="background-image: url(<?php echo $cta_box_bg['url']; ?>);">
            <?php endif; ?>
                <div class="col-12 col-md-5">
                    <div class="col-left">
                    <h3><?php the_field('cta_box_title');?></h3>
                    <p><?php the_field('cta_box_description'); ?></p>
                    <?php 
                        $cta_box_link = get_field('cta_box_button');
                        if( $cta_box_link ): 
                            $cta_box_link_url = $cta_box_link['url'];
                            $cta_box_link_title = $cta_box_link['title'];
                            $cta_box_link_target = $cta_box_link['target'] ? $cta_box_link['target'] : '_self';
                            ?>
                            <a class="btn-bn-light" href="<?php echo esc_url( $cta_box_link_url ); ?>" target="<?php echo esc_attr( $cta_box_link_target ); ?>"><?php echo esc_html( $cta_box_link_title ); ?><span><i class="fa-solid fa-angle-right"></i></span></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="col-right">
                    <?php
                    $cta_box_img = get_field('cta_box_image');
                    if( !empty($cta_box_img) ):?>
                    <img src="<?php echo $cta_box_img['url']; ?>" alt="<?php echo $cta_box_img['alt']; ?>" class="w-100">
                    <?php endif; ?>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <!-- Cta banner ends -->
         
        <!-- Fine country -->
        <section class="fine-country">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-12 col-md-6">
                    <?php
                        $fine_title_img = get_field('fine_title_image');
                        if( !empty($fine_title_img) ):?>
                        <img src="<?php echo $fine_title_img['url']; ?>" alt="<?php echo $fine_title_img['alt']; ?>" class="title-img d-block d-md-none">
                        <?php endif; ?>
                    <?php
                    $fine_col_left_img = get_field('fine_country_image');
                    if( !empty($fine_col_left_img) ):?>
                    <img src="<?php echo $fine_col_left_img['url']; ?>" alt="<?php echo $fine_col_left_img['alt']; ?>" class="w-100">
                    <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-end">
                        <div class="col-right">
                        <?php
                        $fine_title_img = get_field('fine_title_image');
                        if( !empty($fine_title_img) ):?>
                        <img src="<?php echo $fine_title_img['url']; ?>" alt="<?php echo $fine_title_img['alt']; ?>" class="w-100 d-none d-md-block">
                        <?php endif; ?>
                        <p><?php the_field('fine_country_description');?></p>
                        <?php 
                        $fine_button = get_field('fine_country_button');
                        if( $fine_button ): 
                            $fine_button_url = $fine_button['url'];
                            $fine_button_title = $fine_button['title'];
                            $fine_button_target = $fine_button['target'] ? $fine_button['target'] : '_self';
                            ?>
                            <a class="btn-cs-dark" href="<?php echo esc_url( $fine_button_url ); ?>" target="<?php echo esc_attr( $fine_button_target ); ?>"><?php echo esc_html( $fine_button_title ); ?><span><i class="fa-solid fa-angle-right"></i></span></a>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fine country ends -->
         
        <!-- Showcase numbers -->
        <section class="showcase-numbers">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="box-title">
                            <h2><?php the_field('showcase_title'); ?></h2>
                        </div>
                        <p class="description d-none d-md-block"><?php the_field('showcase_description');?></p>
                    </div>
                </div>
                <div class="numbers-wrap">
                <?php if( have_rows('numbers_repeater_showcase') ): ?>
            <div class="row g-4">
            <?php while( have_rows('numbers_repeater_showcase') ): the_row(); ?>
                <div class="col-12 col-md-6">
                        <div class="items-wrap">
                        <?php
                        $showcase_logo = get_sub_field('showcase_number_image');
                        if( !empty($showcase_logo) ):?>
                        <img src="<?php echo $showcase_logo['url']; ?>" alt="<?php echo $showcase_logo['alt']; ?>" class="w-100">
                        <?php endif; ?>
                        <div class="col-right">
                            <h4><?php the_sub_field('showcase_number_title'); ?></h4>
                            <span><?php the_sub_field('showcase_number_tagline'); ?></span>
                        </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
                <?php endif; ?> 
                </div>
            </div>
        </section>
        <!-- Showcase numbers ends -->

        <!-- Departments Insight -->
     <section class="departments insights-wrapper">
        <div class="container">
            <div class="content">
            <h2><?php the_field('insights_title', 'option'); ?></h2>
                <p><?php the_field('insights_description', 'option'); ?></p>
            </div>
            <div class="depart-slider insigh">
            <?php
                $args = array(
                    'post_type' => 'Insights',
                    'posts_per_page' => 10,
                );

                $insight_query = new WP_Query( $args );

                if ( $insight_query->have_posts() ) :
                    while ( $insight_query->have_posts() ) : $insight_query->the_post(); ?>
                        <div class="slide-wrap">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <div class="inner-content">
                                <h4><?php the_title(); ?></h4>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn-cs-light">Read more <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No insights found.</p>';
                endif;
                ?>
            </div>
        </div>
     </section>
     <!-- Departments Insights ends -->
</main>
<?php get_footer();?>



