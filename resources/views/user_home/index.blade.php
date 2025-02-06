<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>E-commerce Landing page Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/userstyle.css') }}">
</head>

<body>
	<header>
		<nav id="nav">
			{{-- <div class="logo nav-common"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412541/E-commerce%20landing%20page/icons/BRANDY_1x.png" alt="brand-logo"></div> --}}
			<div class="logo nav-common"><img src="https://res.cloudinary.png" alt="brand-logo"></div>
			<ul class="nav-common">
				<li><a href="#">home</a></li>
				<li><a href="#products">products</a></li>
				<li><a href="#collections">collections</a></li>
				<li><a href="#blog">blog</a></li>
				<li><a href="#contact">contact</a></li>
			</ul>
			<div class="cart nav-icon nav-common"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412544/E-commerce%20landing%20page/icons/shopping_cart_1x.png" alt="shopping-cart"></div>
			<div class="menu nav-icon nav-common"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412543/E-commerce%20landing%20page/icons/menu_1x.png" alt="hamburger-menu"></div>
		</nav>
		<div id="header-hero">
			<div class="header-bg"> <img src="https://images.unsplash.com/photo-1592311800804-1b72948c1a99?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="header-image" /> </div>
			<div class="header-content">
				<p class="heading-1">Books Today! 2025</p>
				<h1>wellcome to Demo<span class="logo-style">Project</span> </h1>
				<p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<div class="button">
					<p>shop now</p>
				</div>
			</div>
		</div>
	</header>
	<section id="summer-collection">
		<div class="container">
			<div class="sc-content">
				<h1>summer collection</h1>
				<p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
					has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<a href="#">discover now</a> </div>
			<div class="sc-media">
				<div class="sc-media-bg"> <img src="https://plus.unsplash.com/premium_photo-1738614647383-0435fcb26a55?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="sc-image" /> </div>
			</div>
		</div>
	</section>
	<section id="products">
		<div class="container">
			<div class="products-header">
				<h2>popular products</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
			<div class="product product-1">
				<figure> <img src="https://plus.unsplash.com/premium_photo-1738449260172-9d54781f7225?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="product-image">
					<figcaption>cold fashion</figcaption>
					<figcaption>$ 56.00</figcaption>
				</figure>
			</div>
			<div class="product product-2">
				<figure> <img src="https://images.unsplash.com/photo-1738258644135-29aa538dfa6f?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="product-image">
					<figcaption>women fashion</figcaption>
					<figcaption>$ 84.00</figcaption>
				</figure>
			</div>
			<div class="product product-3">
				<figure> <img src="https://images.unsplash.com/photo-1738240880701-a70e8ba9118c?q=80&w=1990&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="product-image">
					<figcaption>women fashion</figcaption>
					<figcaption>$ 48.00</figcaption>
				</figure>
			</div>
			<div class="product product-4">
				<figure> <img src="https://images.unsplash.com/photo-1737100593814-8ceb04f29cca?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="product-image">
					<figcaption>men fashion</figcaption>
					<figcaption>$ 89.00</figcaption>
				</figure>
			</div>
		</div>
	</section>
	<section id="collections">
		<div class="container">
			<div class="c-1">
				<div class="c-1-image-holder"> <img src="https://plus.unsplash.com/premium_photo-1737697221626-8a957abad2df?q=80&w=2083&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image"> </div>
			</div>
			<div class="c-2">
				<h2>featured collection</h2>
				<hr />
				<div class="c-2-image-holder"> <img class="left" src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=1966&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""><img class="right" src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412552/E-commerce%20landing%20page/suit-collections/collection-1-img_3x.jpg"
					 alt=""></div>
				<p class="button">view all collections</p>
			</div>
		</div>
	</section>
	<section id="blog">
		<div class="container">
			<div class="blog-header">
				<h2>latest from blog</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
			<div class="blog-content">
				<div class="blog-1">
					<div class="blog-1-image-holder"> <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image"> </div>
					<div class="blog-1-content">
						<h4>Lorem Ipsum</h4>
						<h3>Lorem ipsum dolor sit amet.</h3>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<p class="button">view post</p>
					</div>
				</div>
				<div class="blog-2">
					<div class="blog-2-image-holder"> <img src="https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?q=80&w=1937&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image"> </div>
					<div class="blog-2-content">
						<h4>Lorem Ipsum</h4>
						<h3>Lorem ipsum dolor sit amet.</h3>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<p class="button">view post</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact">
		<div class="container">
			<h4>contact us</h4>
			<p>451 awenve 5th street new york city</p>
			<p>+ (42) 442 4521</p>
			<p>info.fashion@gmail.com</p>
			<p class="email">emailus <span><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412541/E-commerce%20landing%20page/icons/get_in_touch_1x.png" alt="email-image"></span></p>
		</div>
	</section>
	<footer>
		<p class="copy-right"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412543/E-commerce%20landing%20page/icons/copy-right-img_1x.png" alt="copy right image" /> 2017 all right recived </p>
		<p>privacy policy</p>
		<p>license</p>
	</footer>
	<div class="back-to-top"><a href="#nav"> <img title="Back to Top." src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412541/E-commerce%20landing%20page/icons/back_-_top_1x.png" alt="back to top"></a> </div>
</body>
</html>
