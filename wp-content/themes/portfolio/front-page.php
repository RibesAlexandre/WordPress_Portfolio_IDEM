<?php get_header(); ?>

<?php while (have_posts()) : the_post() ?>

<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-white mt-5 mb-2"><?= the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</header>

    <main class="container">

    <?php if (have_rows('recent_works')): while(have_rows('recent_works')): the_row() ?>

    <h2><?php the_sub_field('title') ?></h2>
    <p><?php the_sub_field('description'); ?></p>

    <div class="row">
        <?php
        $query = [
            'post_type' => 'work',
            'posts_per_page' => 3
        ];
        $work = get_sub_field('recent_works');
        if ($work) {
            $query['post__not_in'] = [$work->ID];
        }
        $query = new WP_Query($query);
        while($query->have_posts()){
            $query->the_post();
           ?>

            <?php
            $categories = get_the_category();
            ?>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <?php if( has_post_thumbnail()): ?>
                        <img class="card-img-top" src="<?= the_post_thumbnail_url('work_cover'); ?>" alt="<?= the_title(); ?>">
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

           <?php
        }
        wp_reset_postdata();
        ?>
    </div>

    <?php endwhile; endif; ?>
</main>

<?php endwhile; ?>

<?php get_footer(); ?>
