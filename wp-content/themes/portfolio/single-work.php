<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<header>
    <div id="carouselWorksIndicator" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php for( $i = 0; $i < count(get_attached_media('image', get_post())); $i++ ): ?>
            <li data-target="#carouselWorksIndicator" data-slide-to="<?= $i; ?>" class="<?= $i === 0 ? 'active' : ''; ?>"></li>
            <?php endfor; ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <?php $count = 0; ?>
            <?php foreach(get_attached_media('image', get_post()) as $image): ?>
                <div class="carousel-item<?= $count < 1 ? ' active' : ''; ?>" style="background-image: url('<?= wp_get_attachment_image_url($image->ID, 'work-carousel') ?>')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><?= the_title() ?></h3>
                        <p><?= the_excerpt() ?></p>
                    </div>
                </div>
            <?php $count++; ?>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselWorksIndicator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselWorksIndicator" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<main class="container">
    <?php the_content(); ?>
</main>

<?php endwhile; ?>
<?php get_footer(); ?>
