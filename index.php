<?php get_header();?>
	<div class="slider">
		<img src="images/slider.jpg">
	</div>
	<div class="event">
		<div class="event_left">
			<h2>一般公告</h2>
			<ul>
				<?php while ( have_posts() ) : the_post(); 
				if(is_category('一般公告')):?>
				<li><p><?php the_time('Y-m-d');?></p><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endif; endwhile;?>
			</ul>
			<h2>競賽訊息</h2>
			<ul>
				<?php while ( have_posts() ) : the_post(); 
				if(is_category('競賽訊息')):?>
				<li><p><?php the_time('Y-m-d');?></p><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endif; endwhile;?>
			</ul>
		</div>
		<div class="event_right">
			<h2>學術活動與演講</h2>
			<ul>
				<?php while ( have_posts() ) : the_post(); 
				if(is_category('學術活動') || is_category('演講')):?>
				<li><p><?php the_time('Y-m-d');?></p><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endif; endwhile;?>
			</ul>
			<h2>企業求才與實習</h2>
			<ul>
				<?php while ( have_posts() ) : the_post(); 
				if(is_category('企業求才') || is_category('實習')):?>
				<li><p><?php the_time('Y-m-d');?></p><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endif; endwhile;?>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
<?php get_footer();?>