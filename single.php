<?php 
    get_header();
?>

    <main id="news-detail" class="news-detail">
        <section id="news-detail__main" class="news-detail__main">
            <div class="container">
                <div class="board wow fadeInUpBig">
                    <label><?php echo get_the_date('Y/m/d'); ?></label>
                    <h2><?php the_title(); ?></h2>
                    <figure>
                        <img class="is-pc" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">                
                    </figure>
                    <p><?php the_content(); ?></p>
                    <a href="<?php echo site_url("/news"); ?>" class="main-btn main-btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" viewBox="0 0 25 12" fill="none">
                            <path d="M0.5 6L8.75 10.7631L8.75 1.23686L0.5 6Z" fill="#111111" />
                            <rect width="18" height="1" transform="matrix(-1 0 0 1 24.5 5.5)" fill="#111111" />
                        </svg>
                        <span>一覧に戻る</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

<?php
    get_footer(); 
?>