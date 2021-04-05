<?php get_header(); ?>

<header class="bg-primary py-5 mb-5">
    <?php while(have_posts()): the_post(); ?>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-white mt-5 mb-2"><?= the_title(); ?></h1>
                <?php if( has_excerpt() ): ?>
                <p class="lead mb-5 text-white-50"><?= the_excerpt(); ?></p>
                <?php endif; ?>
                <ul class="list-inline text-center">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                    ?>
                    <li class="list-inline-item">
                        <a href="<?= get_term_link($categories[0]) ?>" title="<?= $categories[0]->name ?>"><?= $categories[0]->name ?></a>
                    </li>
                    <?php endif; ?>
                    <li class="list-inline-item">
                        <?= sprintf(__('Publié le %s à %s', 'portfolio'), get_the_date(), get_the_time()) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</header>

<main class="container">
    <?php if( has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100% height: auto">
    <?php endif; ?>

    <?php the_content(); ?>
</main>

<?php get_footer(); ?>
