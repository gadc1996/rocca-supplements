<section class="products">
<h2 class="title">Articulos descatados</h2>
<hr>
<div class="product-row">

<?php
$featuredArgs = array(
	'post_type' => 'articulos',
	'posts_per_page' => 8,
	'category_name' => 'destacados',
);
$featured = new WP_Query($featuredArgs);
while($featured->have_posts()){
	$count = 1;
	$featured->the_post();
	if($count < 4){
		echo "$count";
		$count = $count + 1;
?>

<?php
	}
	else{
		print 'new row';
	}
}
?>
			<div class="product-box">
			<img src="../assets/img/product1.jpeg" alt="">
			<h4 class="category">Oxido, Preentreno</h4>
			<h3 class="product-name">Nitraflex</h3>
		</div>
		<div class="product-box">
			<img src="../assets/img/product1.jpeg" alt="">
			<h4 class="category">Oxido, Preentreno</h4>
			<h3 class="product-name">Nitraflex</h3>
		</div>
		<div class="product-box">
			<img src="../assets/img/product1.jpeg" alt="">
			<h4 class="category">Oxido, Preentreno</h4>
			<h3 class="product-name">Nitraflex</h3>
		</div>
		<div class="product-box">
			<img src="../assets/img/product1.jpeg" alt="">
			<h4 class="category">Oxido, Preentreno</h4>
			<h3 class="product-name">Nitraflex</h3>
		</div>
	</div>
</section>
		
