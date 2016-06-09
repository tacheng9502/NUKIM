<?php get_header();?>
	<?php while ( have_posts() ) : the_post(); ?>
    <div class="content">
        <?php breadcrumb_init(); ?>
        <h2><?php the_title();?></h2>
        <span class="date"><?php the_time('y/m/d')?></span>
        <?php the_content();?>
    </div>
	<?php endwhile ?>
<?php get_footer();?>