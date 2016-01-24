<!doctype html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<title>Portfolio - Rewalk</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no, target-densitydpi=device-dpi">
		<script type="text/javascript" src="javascript/head.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/screen.css" media="screen">
		<link rel="stylesheet" type="text/css" href="styles/print.css" media="print">
		<link rel="icon" type="image/x-icon" href="favicon.ico">
	</head>
	<body>
		<div id="root">
			<?php include("header.php") ?>   
			<article id="content">
				<ul class="list-a">
					<li class="active"><a href="#" data-type="*">All</a></li>
					<li><a href="#" data-type=".web">Websites</a></li>
					<li><a href="#" data-type=".mob">Mobile</a></li>
					<li><a href="#" data-type=".ecm">eCommerce</a></li>
					<li><a href="#" data-type=".dux">Design &amp; UX</a></li>
				</ul>
				<ul class="gallery-a">
						<li class="web">
							<img src="gallery/22.jpg" alt="Placeholder" width="360" height="270">
							<div>
								<h3>Digital menu</h3>				
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt eleifend pulvinar.</p>
								<p class="link-b"><a href="portfolio-post.html">View</a></p>
							</div>
							<span>Mobile</span>
						</li>
						<li class="mob">
							<img src="gallery/55.png" alt="Placeholder" width="360" height="270">
							<div>
								<h3>M is for Meteor</h3>				
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt eleifend pulvinar.</p>
								<p class="link-b"><a href="portfolio-post.html">View</a></p>
							</div>
							<span>Mobile</span>
						</li>
						<li class="ecm">
							<img src="gallery/44.png" alt="Placeholder" width="360" height="270">
							<div>
								<h3>Android Theme</h3>				
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt eleifend pulvinar.</p>
								<p class="link-b"><a href="portfolio-post.html">View</a></p>
						</div>
						<span>Mobile</span>
					</li>
					<li class="dux">
						<img src="gallery/33.jpg" alt="Placeholder" width="360" height="270">
						<div>
							<h3>Encourage Others Re-Work</h3>				
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt eleifend pulvinar.</p>
							<p class="link-b"><a href="portfolio-post.html">View</a></p>
						</div>
						<span>Mobile</span>
					</li>
					<li class="web">
						<img src="gallery/11.jpg" alt="Placeholder" width="360" height="270">
						<div>
							<h3>Clique Redisign</h3>				
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt eleifend pulvinar.</p>
							<p class="link-b"><a href="portfolio-post.html">View</a></p>
						</div>
						<span>Mobile</span>
					</li>
					<li class="mob">
						<img src="gallery/66.png" alt="Placeholder" width="360" height="270">
						<div>
							<h3>More about less</h3>				
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt eleifend pulvinar.</p>
							<p class="link-b"><a href="portfolio-post.html">View</a></p>
						</div>
						<span>Mobile</span>
					</li>
				</ul>
				<nav class="pagination-a">
					<ol>
						<li><a href="#"><i class="icon-arrows" data-icon="&#xe03f;"></i> <span class="hidden">Previous</span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#"><i class="icon-arrows" data-icon="&#xe04b;"></i><span class="hidden">Next</span></a></li>
					</ol>
				</nav>
			</article>
			<?php include("footer.php")  ?>
		</div>
		<script type="text/javascript">
			head.load('javascript/jquery.js','javascript/scripts.js','javascript/mobile.js')
		</script>
	</body>

</html>