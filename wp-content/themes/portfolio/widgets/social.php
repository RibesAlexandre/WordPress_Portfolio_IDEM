<?php
/**
 *  Ce fichier permet de générer l'affichage de notre widget social avec des valeurs dynamiques
 *  Pour chaque entrée, onv vérifie que le champ existe (isset) est qu'il est rempli (!empty)
 *  On gère ensuite l'affichage avec un lien en l'échapant pour des raisons de sécurité (esc_url)
 */
?>
<ul class="list-inline">
    <?php if( isset($instance['facebook']) && !empty($instance['facebook']) ): ?>
        <li class="list-inline-item"><a href="<?= esc_url($instance['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
    <?php endif; ?>
    <?php if( isset($instance['twitter']) && !empty($instance['twitter']) ): ?>
        <li class="list-inline-item"><a href="<?= esc_url($instance['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
    <?php endif; ?>
    <?php if( isset($instance['instagram']) && !empty($instance['instagram']) ): ?>
        <li class="list-inline-item"><a href="<?= esc_url($instance['instagram']); ?>"><i class="fab fa-instagram"></i></a></li>
    <?php endif; ?>
</ul>
<p><small><?= $instance['credits']; ?></small></p>