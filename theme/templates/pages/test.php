<?php
$IC = new Items();

$myItems = $IC->getItems([
	"tags"=>"category:filler",
	"extend"=>"true"
]);

// print_r($myItems);


?>

<div class="scene product i:product" itemscope itemtype="http://schema.org/Product">
	
	<h2>list template</h2>
	<h3>First and foremost: Here are the names of some filler items</h3>

	<ul>
		<?php foreach ($myItems as $value):?>
		<li><a href="http://newborn.local/toys/<?=$value["sindex"]?>"><?php print($value["name"]);?></a></li>
		<?php endforeach;?>
	</ul>
	
	<h2 itemprop="name">Doohickey</h2>
	<div class="description" itemprop="description">
		<p>A part that frequently fails on Kawasaki motorcycles. Owners simply refer to this part as a doohickey, since nobody can remember the official name.</p>

	</div>
	
	<p></p>
	<ul class="info">
		<li class="sku" itemprop="sku" content="1234">SKU: 1234</li>
		<li class="ean" itemprop="gtin13" content="1234567890123">EAN: 1234567890123</li>
		<li class="brand">
			<ul class="brand" itemprop="brand" itemscope itemtype="https://schema.org/Organization">
				<li class="name" itemprop="name">Kawasaki.</li>
				<li class="logo" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					<span class="image_url" itemprop="url" content="https://botw-pd.s3.amazonaws.com/styles/logo-original-577x577/s3/032012/kawasaki_logo_ok.jpg"></span>
					<span class="image_width" itemprop="width" content="720"></span>
					<span class="image_height" itemprop="height" content="405"></span>
				</li>
			</ul>
		</li>
		<li itemprop="width">4cm</li>
		<li itemprop="height">13cm</li>
		<li itemprop="depth">13cm</li>
		<li itemprop="weight">500g</li>
		<li class="aggregaterating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
			<span class="reviewcount" itemprop="reviewCount" content="10"></span>
			<span class="ratingcount" itemprop="ratingCount" content="9"></span>
			<span class="ratingvalue" itemprop="ratingValue" content="4"></span>
		</li>
	</ul>

	<div class="offer" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
		<h3 class="name" itemprop="name">Offer name</h3>
		<ul class="info">
			<li class="currency" itemprop="priceCurrency" content="DKK"></li>
			<li class="price" itemprop="price" content="59.00">59,00 DKK / Month</li>
			<li class="availability" itemprop="availability" content="InStock">In stock</li>
			<li class="url" itemprop="url" content="http://templator.parentnode.dk/docs/product"></li>
		</ul>
		<div class="description" itemprop="description">
			<p>Offer description</p>
		</div>
	</div>

	<div class="reviews">
		<h3>Reviews</h3>
		<ul class="reviews">
			<li class="review" itemprop="review" itemscope itemtype="http://schema.org/Review">
				<h4 itemprop="headline">Review headline</h4>
				<ul class="info">
					<li class="published_at" itemprop="datePublished" content="2011-04-01">April 1, 2011</li>
					<li class="author" itemprop="author">Martin Kæstel Nielsen</li>
					<li class="rating">
						<ul class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
							<li class="ratingvalue" itemprop="ratingValue" content="4.5">4.5</li>
							<li class="worstrating" itemprop="worstRating" content="1"></li>
							<li class="bestrating" itemprop="bestRating" content="5"></li>
						</ul>
					</li>
				</ul>
				<div class="reviewbody" itemprop="reviewBody">
					<p>The best solution I have seen yet.</p>
				</div>
			</li>
			<li class="review" itemprop="review" itemscope itemtype="http://schema.org/Review">
				<h4 itemprop="headline">Review headline</h4>
				<ul class="info">
					<li class="published_at" itemprop="datePublished" content="2011-04-01">April 1, 2011</li>
					<li class="author" itemprop="author">Martin Kæstel Nielsen</li>
					<li class="rating">
						<ul class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
							<li class="ratingvalue" itemprop="ratingValue" content="4.5">4.5</li>
							<li class="worstrating" itemprop="worstRating" content="1"></li>
							<li class="bestrating" itemprop="bestRating" content="5"></li>
						</ul>
					</li>
				</ul>
				<div class="reviewbody" itemprop="reviewBody">
					<p>The best solution I have seen yet.</p>
				</div>
			</li>
		</ul>
	</div>

</div>
