<?php get_header();?>
	<div class="slider">
		<img src="images/slider.jpg">
	</div>
	<div class="event">
		<div class="event_left">
			<h2>�@�뤽�i</h2>
			<ul>
				<?php while ( have_posts() ) : the_post(); 
				if(is_category('�@�뤽�i')):?>
				<li><p><?php the_time('Y-m-d');?></p><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endif; endwhile;?>
			</ul>
			<h2>�v�ɰT��</h2>
			<ul>
				<?php while ( have_posts() ) : the_post(); 
				if(is_category('�v�ɰT��')):?>
				<li><p><?php the_time('Y-m-d');?></p><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endif; endwhile;?>
			</ul>
		</div>
		<div class="event_right">
			<h2>�ǳN���ʻP�t��</h2>
			<ul>
				<?php while ( have_posts() ) : the_post(); 
				if(is_category('�ǳN����') || is_category('�t��')):?>
				<li><p><?php the_time('Y-m-d');?></p><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endif; endwhile;?>
			</ul>
			<h2>���~�D�~�P���</h2>
			<ul>
				<?php while ( have_posts() ) : the_post(); 
				if(is_category('���~�D�~') || is_category('���')):?>
				<li><p><?php the_time('Y-m-d');?></p><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php endif; endwhile;?>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
<?php get_footer();?>