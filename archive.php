<?php
get_header(); 
?>
<section class="products">
	<h2 class="title">Blog</h2>
	<hr>
	<div class="product-row"><?php
		$Args = array(
			'post_type' => 'articulos',
			'posts_per_page' => 8,
			//'category_name' => 'destacados',
		);
		$featured = new WP_Query($Args);

		$count = 0;
			
		while($featured->have_posts()){
			$featured->the_post();
			if($count < 4){
			?>
				<div class="product-box">
					<img class="product-image" src="<?php echo  get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
					<h4 class="category"><?php the_category(); ?></h4>
					<a href="<?php the_permalink(); ?>">
						<h3 class="product-name"><?php the_title(); ?></h3>
					</a>	
				</div>
			<?php
				$count++;
			}
			else{
			?>
				</div>		
				<div class="product-row">
					<div class="product-box">
						<img class="product-image" src="<?php echo  get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
						<h4 class="category"><?php the_category(); ?></h4>
						<a href="<?php the_permalink(); ?>">
							<h3 class="product-name"><?php the_title(); ?></h3>
						</a>	
					</div>
			<?php
				$count = 0;
			}
		}
		wp_reset_query();
	?>
		</div>
</section>
<?php	
get_footer();
?>
