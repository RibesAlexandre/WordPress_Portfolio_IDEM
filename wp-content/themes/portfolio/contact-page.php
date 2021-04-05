<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage Portfolio
 */

get_header();
?>

<?php if( have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>

        <header class="bg-primary py-5 mb-5">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white mt-5 mb-2"><?php the_title() ?></h1>

                    </div>
                </div>
            </div>
        </header>

    <main class="container">
        <?php the_content(); ?>
    </main>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
