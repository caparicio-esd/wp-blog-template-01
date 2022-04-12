<?php get_header(); ?>

<div class="container">
    <main class="page_container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?> id="<?php the_ID() ?>">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
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