<?php 
/**
 * Single Page Template
 * 
 */
?>

<?php get_header(); ?>

<div class="container">
    <main class="single_container">
        <div class="back_arrow">
            <a href="<?php echo home_url(); ?>">
                <svg width="63" height="24" viewBox="0 0 63 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97918 12.6066 1.3934C12.0208 0.807612 11.0711 0.807612 10.4853 1.3934L0.93934 10.9393ZM63 10.5L2 10.5V13.5L63 13.5V10.5Z" fill="black" />
                </svg>

            </a>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?> id="<?php the_ID() ?>">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <div class="categories">
                        <?php the_category(); ?>
                    </div>
                    <div class="post_meta">
                        <div class="author"><?php the_author(); ?></div>
                        <div class="date"><?php the_date("d/m/Y"); ?></div>
                    </div>
                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>

                </article>

        <?php endwhile;
        endif; ?>

    </main>
</div>

<?php get_footer(); ?>