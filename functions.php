<?php
register_nav_menus( 
	array( 
		'primary-menu' => __( '主選單' ) 
	)
);


function breadcrumb_init($nickname = ''){
	global $post,$theme_dir;
	?>
	<ul class="breadcrumb">
	<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<i class="fa fa-home"></i>	
		<a href="<?php bloginfo('url');?>" itemprop="url" title="<?php bloginfo('name');?>">
			<span itemprop="title"><?php bloginfo('name');?></span></a> 
	</li>
	<?php
	if ( is_page() ){
		echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">' . the_title() . '</li>';
	}
	if( is_single() ){
		$categories = array_reverse(get_the_category());
		foreach ($categories as $category) {
			echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
			echo '<span class="divider">&gt;</span> <a href="' . get_category_link($category -> term_id) . '" itemprop="url" title=' . $category -> cat_name . '> <span itemprop="title">' . $category -> cat_name . '</span> </a>';
			echo '</li>';
		}
	}else{?>
		<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active">
			<span class="divider">&gt;</span> <span itemprop="title">
				<?php
					if (is_category()) {
						echo single_cat_title();
					} elseif (is_author()) {
						echo $nickname;
					} elseif (is_tag()) {
						echo single_tag_title('', true);
					} elseif (is_day()) {
						the_time(get_option('date_format'));
					} elseif (is_month()) {
						the_time('F, Y');
					} elseif (is_year()) {
						the_time('Y');
					}
				?>
			</span>
		</li>
	<?php } ?>
	</ul>
<?php }