<?php 
/**
 * Search Page template
 * 
 */
?>
<?php get_header(); ?>


<div class="container">
    <h1>Searching: <?php echo get_search_query(); ?> </h1>

    <main class="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article <?php post_class("item"); ?> id="<?php the_ID() ?>">
                    <div class="item-content">
                        <div class="post_picture">
                            <picture class="picture">
                                <?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
                            </picture>
                            <div class="categories">
                                <?php the_category(); ?>
                            </div>
                        </div>
                        <div class="post_content">
                            <h3>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="post_meta">
                            <div class="author"><?php the_author(); ?></div>
                            <div class="date"><?php the_date("d/m/Y"); ?></div>
                        </div>
                    </div>
                </article>

        <?php endwhile;
        endif; ?>

    </main>
</div>

<?php get_footer(); ?>