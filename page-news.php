<?php 
    get_header();

    /**
    * Template name: News
    */
?>
    <main id="news" class="news">
        <section id="news__fv" class="news__fv">
            <img class="is-pc" src="<?php echo get_template_directory_uri()?>/assets/image/News/FV-PC.jpg" alt="NEWS">
            <img class="is-sp" src="<?php echo get_template_directory_uri()?>/assets/image/News/FV-SP.jpg" alt="NEWS">
            <h1 class="wow fadeInUp">NEWS<small>お知らせ</small></h1>
        </section>
        <section id="news__main" class="news__main">
            <div class="container">
                <?php
                    $args = array(
                        'post_type' =>  'post',
                        'post_status' =>  'publish',
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'posts_per_page' => -1,                  
                    );

                        $custom_query = new WP_Query($args);
                        if ( $custom_query-> have_posts() ) :

                            while ( $custom_query->have_posts() ) :

                            $custom_query->the_post();
                    ?>
                        <a href="<?php the_permalink(); ?>" class="item wow fadeInUp">
                           <div>
                                <figure>
                                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                                </figure>
                                <label class="news-date"><?php echo get_the_date('Y/m/d'); ?></label>
                                <h3 class="news-ttl"><?php the_title(); ?></h3>
                                <p class="news-contents"><?php the_content(); ?></p>
                                <p class="__more-btn">READ MORE<i class="bar"></i></p>
                            </div>
                        </a>
                    <?php
                        endwhile;endif;
                        wp_reset_query();
                        wp_reset_postdata();
                    ?>    
          </div>
        </section>
        <section id="news__btn" class="news__btn">
            <a class="main-btn main-btn-light">
                READ MORE
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" viewBox="0 0 25 12" fill="none">
                    <path d="M24.5 6L16.25 10.7631L16.25 1.23686L24.5 6Z" fill="#FF2222" />
                    <rect x="0.5" y="5.5" width="18" height="1" fill="#FF2222" />
                </svg>
            </a>
        </section>
    </main>

<?php
    get_footer(); 
?>