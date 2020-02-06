<?php get_header();?>
<!--
    <main>
        <div>
            <h4 class="col">Filmes</h4>
            <ul class="col">
                <li>Aves de Rapina</li>
                <li>Frozen 2</li>
                <li>Dollitle</li>
            </ul>
        </div>
        <div>
            <h4>Séries</h4>
            <ul>
                <li>Scream</li>
                <li>Supernatural</li>
                <li>Sense8</li>
            </ul>
        </div>
    </main>
-->
    <h1><?php the_title();?></h1>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
<?php get_footer();?>