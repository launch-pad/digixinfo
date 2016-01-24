<!doctype html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<title>Contact - Rewalk</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no, target-densitydpi=device-dpi">
		<script type="text/javascript" src="javascript/head.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/screen.css" media="screen">
        <link rel="stylesheet" type="text/css" href="styles/forms.css" media="screen">
		<link rel="stylesheet" type="text/css" href="styles/print.css" media="print">
		<link rel="icon" type="image/x-icon" href="favicon.ico">
	</head>
	<body>
		<div id="root" class="b">
			<?php include("header.php") ?>   
			<article id="contact">
				<header>
					<h3>Headquarters</h3>
					<p>1 Main St. SE #400<br> Minneapolis, MN 55414, United States</p>
					<p class="link-c"><a href="#">Directions</a></p>
				</header>
				<form  onSubmit="return false;" id="contact-form">
					<fieldset>
						<p>
							<label for="ca">Name</label>
							<input type="text" id="ca" name="ca" required>
						</p>
						<p>
							<label for="cb">Email</label>
							<input type="email" id="cb" name="cb" required>
						</p>
						<p>
							<label for="cc">Phone</label>
							<input type="tel" id="cc" name="cc">
						</p>
						<p>
							<label for="cd">Company</label>
							<input type="text" id="cd" name="cd">
						</p>
						<p>
							<label for="ca">Message</label>
							<textarea id="ce" name="ce" required></textarea>
						</p>
						<p><button type="submit">Send</button></p>
					</fieldset>
				</form>
			</article>
			<?php include("footer.php")  ?>
		</div>
		<script type="text/javascript">
			 head.load('javascript/jquery.js', 'javascript/twitterFetcher.js', 'javascript/scripts.js', 'javascript/mobile.js', 'javascript/rewalk.js');
		</script>
	</body>

</html>