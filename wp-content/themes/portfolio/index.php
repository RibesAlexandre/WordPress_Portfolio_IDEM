<?php get_header() ?>

<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
            <?php if( is_category()): ?>
                <h1 class="display-4 text-white mt-5 mb-2"><?= single_cat_title(); ?></h1>
            <?php elseif( is_search() ): ?>
                <h1 class="display-4 text-white mt-5 mb-2">Résultats de votre recherche</h1>
            <?php else: ?>
                <h1 class="display-4 text-white mt-5 mb-2"><?php single_post_title() ?></h1>
            <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<main class="container">

    <?php if( have_posts()): ?>
    <div class="row">
        <?php while(have_posts()): the_post(); ?>

            <?php
            $categories = get_the_category();
            ?>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <?php if( has_post_thumbnail()): ?>
                        <img class="card-img-top" src="<?= the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title(); ?></h4>
                        <?php if( has_excerpt()): ?>
                            <p class="card-text"><?= the_excerpt(); ?></p>
                        <?php endif; ?>
                        <?php if( !empty($categories)): ?>
                            <p><small><a href="<?= get_term_link($categories[0]) ?>" title="<?= $categories[0]->name ?>"><?= $categories[0]->name ?></a></small></p>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer">
                        <a href="<?= the_permalink() ?>" class="btn btn-primary">Lire la suite</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

        <?php paginate_links(); ?>
    <?php else: ?>
    <p class="text-center">Aucun résultat</p>
    <?php endif; ?>

</main>

<?php get_footer() ?>