<?php get_header();?>
	<?php while ( have_posts() ) : the_post(); ?>
    <div class="content">
        <?php breadcrumb_init(); ?>
        <h2><?php the_title();?></h2>
        <span class="date"><?php the_time('y/m/d')?></span>
		<div class="post_content">
        <?php the_content();?>
		</div>
		<span class="social_like_ww">
			<a class="social_like_wrapper social_like_fb" href="javascript:window.open('http://www.facebook.com/sharer.php?u=<?php echo the_permalink();?>', 'Facebook', config='height=500, width=700, toolbar=no, location=no, scrollbar=no');" ><i class="social_like fa fa-facebook"></i></a>
			<a class="social_like_wrapper social_like_gp" href="javascript:window.open('https://plus.google.com/share?url=<?php echo the_permalink();?>', 'Facebook', config='height=500, width=500, toolbar=no, location=no, scrollbar=no');" ><i class="social_like fa fa-google-plus"></i></a>
			<a class="social_like_wrapper social_like_tw" href="javascript:window.open('https://twitter.com/intent/tweet?url=<?php echo the_permalink();?>', 'Facebook', config='height=500, width=700, toolbar=no, location=no, scrollbar=no');" ><i class="social_like fa fa-twitter"></i></a>
		</span>
    </div>
	<?php endwhile ?>
<?php get_footer();?>