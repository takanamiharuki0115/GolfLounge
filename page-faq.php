<?php 
    get_header();    
    /**
    * Template name: Faq
    */
?>

    <main id="faq" class="faq">
        <section id="faq__fv" class="faq__fv">
            <img class="is-pc" src="<?php echo get_template_directory_uri()?>/assets/image/Faq/FV-PC.png" alt="FAQ">
            <img class="is-sp" src="<?php echo get_template_directory_uri()?>/assets/image/Faq/FV-SP.png" alt="FAQ">
            <h1 class="wow fadeInUp">FAQ<small>よくあるご質問</small></h1>
        </section>
        <section id="faq__main" class="faq__main">
            <div class="container">
            <?php
            $categories = get_categories(array(
                'taxonomy' => 'category', // Assuming 'category' is the taxonomy for your FAQ categories
                'hide_empty' => false, // Include categories with no posts
            ));

            foreach ($categories as $category) {
                $args = array(
                    'post_type' =>  'faq_answer',
                    'post_status' =>  'publish',
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $category->term_id,
                        ),
                    ),
                );

                $custom_query = new WP_Query($args);
                
                if ($custom_query->have_posts()) : ?>
                    <div class="qa-box">
                        <h2 class="wow fadeInUp"><?php echo $category->name; ?></h2> <!-- Display category name -->
                        <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                            <div class="qa-item wow fadeInUp">
                                <div class="query">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="svg-box">
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg" width="40" height="2"
                                            viewBox="0 0 40 2" fill="none">
                                            <path d="M0 1H40" stroke="#111111" />
                                            <path d="M40 1L-2.98023e-07 0.999997" stroke="#111111" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" width="40" height="2"
                                            viewBox="0 0 40 2" fill="none">
                                            <path d="M0 1H40" stroke="#111111" />
                                            <path d="M40 1L-2.98023e-07 0.999997" stroke="#111111" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="answer"><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php
                    wp_reset_postdata();
                    endif;
                }
                ?>

            </div>
        </section>
    </main>

<?php
    get_footer(); 
?>