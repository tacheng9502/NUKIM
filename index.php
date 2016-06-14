<?php get_header();?>
	<div class="slider">
		<img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg">
	</div>
	<div class="event">
		<div class="event_left">
			<h2>一般公告</h2>
			<ul>
				<?php $query = new WP_Query('category_name=general-news');
				while ( $query -> have_posts() ) : $query -> the_post(); ?>
				<li><p><?php the_time('Y-m-d');?></p><?php $tags=get_the_tags(); if(count($tags)>0)echo '【'.$tags[0]->name.'】'; ?><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endwhile;?>
			</ul>
			<h2>競賽訊息</h2>
			<ul>
				<?php $query = new WP_Query('category_name=competition');
				while ( $query -> have_posts() ) : $query -> the_post(); ?>
				<li><p><?php the_time('Y-m-d');?></p><?php $tags=get_the_tags(); if(count($tags)>0)echo '【'.$tags[0]->name.'】'; ?><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endwhile;?>
			</ul>
		</div>
		<div class="event_right">
			<h2>學術活動與演講</h2>
			<ul>
				<?php $query = new WP_Query('category_name=academic');
				while ( $query -> have_posts() ) : $query -> the_post(); ?>
				<li><p><?php the_time('Y-m-d');?></p><?php $tags=get_the_tags(); if(count($tags)>0)echo '【'.$tags[0]->name.'】'; ?><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endwhile;?>
			</ul>
			<h2>企業求才與實習</h2>
			<ul>
				<?php $query = new WP_Query('category_name=careers');
				while ( $query -> have_posts() ) : $query -> the_post(); ?>
				<li><p><?php the_time('Y-m-d');?></p><?php $tags=get_the_tags(); if(count($tags)>0)echo '【'.$tags[0]->name.'】'; ?><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endwhile;?>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
<?php get_footer();?>