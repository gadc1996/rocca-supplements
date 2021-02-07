<?php get_header(); ?>
<section class="article">
	<img class="article-image" src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="">
	<div class="article-info">
		<h1 class="title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	<?php the_category(); ?>
	</div>
	</section>
<?php get_footer(); ?>
