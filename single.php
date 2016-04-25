<?php get_header();?>
    <div class="content">
        <?php breadcrumb_init(); ?>
        <h2><?php the_title();?></h2>
        <span class="date"><?php the_time('y/m/d')?></span>
        <?php the_content();?>
    </div>
<?php get_footer();?>