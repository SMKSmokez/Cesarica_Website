<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="CSS/home.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@700&display=swap" rel="stylesheet">
	<title>Home - CESARICA</title>
</head>
<body>
	<?php require_once 'nav.php'; ?>

	<div class="page-container">
		<!-- Title Section -->
		<section class="title-card-container">
			<div class="video-background">
				<video autoplay muted loop playsinline class="bg-video">
					<source src="path/to/your/video.mp4" type="video/mp4">
					Your browser does not support HTML5 video.
				</video>
			</div>
			<img src="Images\Curtain_Open.png" class="curtain curtain-left" alt="left curtain">
			<img src="Images\Curtain_Open.png" class="curtain curtain-right" alt="right curtain">
			<div class="hero-content">
				<h1 class="main-title">CESARICA</h1>
				<h2 class="sub-title">steakhouse & club</h2>
			</div>
			<button class="experience-button">Reserve An Experience</button>
		</section>

        <div class="section-connector-1">
            <img src="Images/Deco_1.svg" alt="gold line divider" />
        </div>
        
		<!-- Cuisine Section -->
		<section class="cuisine-card-container">
			<div class="cuisine-content">
				<div class="cuisine-image-wrapper">
					<div class="cuisine-image-background"></div>
					<img src="Images/cd6912cf5b2c8dd6cea4aeff9987c576.jpg" alt="Steak" class="cuisine-image">
				</div>
				<div class="cuisine-text">
					<div class="cuisine-subtitle gwendolyn-bold">Our Best</div>
					<div class="cuisine-title">Cuisine</div>
					<div class="cuisine-description">
						Cesarica offers exceptional quality and a diverse selection of expertly prepared dishes to satisfy every palate.
					</div>
					<button class="cuisine-button" type="button" onclick="window.location.href='food_showcase.php'">View Our Passion</button>
				</div>
			</div>

		</section>
        
        <div class="section-connector-2">
            <img src="Images/Deco_1.svg" alt="gold line divider" />
        </div>

		<!-- Menu Specials Section -->
		<section class="menu-specials-card-container">
			<div class="menu-specials-content">
				<p class="menu-subtitle gwendolyn-bold">Specialties</p>
				<h2 class="menu-title">From Our Selection</h2>
				<div class="menu-items">
					<div class="menu-row">
						<span class="menu-name"><b>Wagyu</b></span>
						<div class="menu-details">
							<span class="menu-grams">100g</span>
							<span class="menu-price">150</span>
						</div>
					</div>
					<div class="menu-row">
						<span class="menu-name"><b>Wagyu</b></span>
						<div class="menu-details">
							<span class="menu-grams">100g</span>
							<span class="menu-price">150</span>
						</div>
					</div>
					<div class="menu-row">
						<span class="menu-name"><b>Wagyu</b></span>
						<div class="menu-details">
							<span class="menu-grams">100g</span>
							<span class="menu-price">150</span>
						</div>
					</div>
					<div class="menu-row">
						<span class="menu-name"><b>Wagyu</b></span>
						<div class="menu-details">
							<span class="menu-grams">100g</span>
							<span class="menu-price">150</span>
						</div>
					</div>
					<div class="menu-row">
						<span class="menu-name"><b>Wagyu</b></span>
						<div class="menu-details">
							<span class="menu-grams">100g</span>
							<span class="menu-price">150</span>
						</div>
					</div>
					<div class="menu-row">
						<span class="menu-name"><b>Wagyu</b></span>
						<div class="menu-details">
							<span class="menu-grams">100g</span>
							<span class="menu-price">150</span>
						</div>
					</div>
					<div class="menu-row">
						<span class="menu-name"><b>Wagyu</b></span>
						<div class="menu-details">
							<span class="menu-grams">100g</span>
							<span class="menu-price">150</span>
						</div>
					</div>
					<div class="menu-row">
						<span class="menu-name"><b>Wagyu</b></span>
						<div class="menu-details">
							<span class="menu-grams">100g</span>
							<span class="menu-price">150</span>
						</div>
					</div>
				</div>
				<button class="view-more-specials" type="button" onclick="window.location.href='menu.php'">Visit Our Menu</button>
			</div>
			<div class="section-connector-3">
                <img src="Images/Deco_3.svg" alt="gold line divider" />
            </div>
		</section>

        <div class="section-connector-4">
            <img src="Images\Deco_4.svg" alt="gold line divider" />
        </div>

		<!-- Cocktail Section -->
		<section class="cocktail-card-container">
			<div class="cocktail-grid">
				<div class="menu-item">
					<div class="item-details">
						<span class="name"><b>Chill Collins</b></span>
						<span class="price">10</span>
						<span class="ingredients">Sorbet - Gin | Simple Syrup | Lime Juice | Tonic</span>
					</div>
				</div>
				<div class="menu-item">
					<div class="item-details">
						<span class="name"><b>Cocktail</b></span>
						<span class="price">10</span>
						<span class="ingredients">Hendrik's | Simple Syrup | Lime Juice | Sparkling</span>
					</div>
				</div>
				<div class="menu-item">
					<div class="item-details">
						<span class="name"><b>Cocktail</b></span>
						<span class="price">10</span>
						<span class="ingredients">Hendrik's | Simple Syrup | Lime Juice | Sparkling</span>
					</div>
				</div>
				<div class="menu-item">
					<div class="item-details">
						<span class="name"><b>Cocktail</b></span>
						<span class="price">10</span>
						<span class="ingredients">Hendrik's | Simple Syrup | Lime Juice | Sparkling</span>
					</div>
				</div>
				<div class="menu-item">
					<div class="item-details">
						<span class="name"><b>Cocktail</b></span>
						<span class="price">10</span>
						<span class="ingredients">Hendrik's | Simple Syrup | Lime Juice | Sparkling</span>
					</div>
				</div>
				<div class="menu-item">
					<div class="item-details">
						<span class="name"><b>Cocktail</b></span>
						<span class="price">10</span>
						<span class="ingredients">Hendrik's | Simple Syrup | Lime Juice | Sparkling</span>
					</div>
				</div>
			</div>
			<button class="view-more-drinks" type="button" onclick="window.location.href='drink_list.php'">See Our Drinks</button>

            <div class="section-connector-5">
                <img src="Images\Deco_4.svg" alt="gold line divider" />
            </div>
		</section>

        
        <div class="section-connector-6">
            <img src="Images\Deco_1.svg" alt="gold line divider" />
        </div>

		<!-- Cigar Section -->
		<section class="cigar-card-container">
			<div class="cigar-content">
				<div class="cigar-text">
					<div class="cigar-subtitle gwendolyn-bold">Our Finest</div>
					<div class="cigar-title">Cigars</div>
					<div class="cigar-description">
						Cesarica offers an exclusive selection of premium cigars to enhance your experience.
					</div>
					<button class="cigar-button" type="button" onclick="window.location.href='cigar_list.php'">View Our Selection</button>
				</div>
				<div class="cigar-image-wrapper">
					<div class="cigar-image-background"></div>
					<img src="Images/il_fullxfull.5832939800_bv1t.jpg" alt="Cigar on ashtray" class="cigar-image">
				</div>
			</div>

            <div class="section-connector-7">
                <img src="Images\Deco_1.svg" alt="gold line divider" />
            </div>

		</section>

		<!-- Footer -->
		<footer class="footer-container">
			<div class="footer-logo">CESARICA</div>
			<p>Estarer Ulica, City 80100<br>Phone Number<br>Open 08.00 - 01.00</p>
		</footer>
	</div>
</body>
</html>
