<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
		<link rel="stylesheet" href="css/animations.css" type="text/css">

		<!-- STUFF JUST FOR THIS TEMPLATE -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="example-assets/style.css" type="text/css">
	</head>
	<body>
		<header class='mainHeader'>
			<div class='container'>
				<div class='animatedParent' data-sequence='500' >
					<h1 class='animated growIn slower'  data-id='1'>CSS3 Animate-it</h1>
					<h2 class='animated bounceInRight slower'  data-id='2'>Because static content is boring!</h2>
					<a class="btn btn-primary animated bounceInLeft slower" href="index.php"  data-id='3'>See Functions</a>
					<a class='btn btn-default animated bounceInRight slower' href='https://github.com/Jack-McCourt/css3-animate-it/archive/master.zip' data-id='4'>Download!</a>
					<div class='animated bounceInUp findMe' data-id='5'>Find me at <a  target="_blank" href='http://jackonthe.net'>jackonthe.net</a></div>
				</div>
			</div>
		</header>
		<div class='container animations' style='margin-bottom:30px'>
			<div class='animatedParent'>
				<h2 class='animated growIn slowest'>Animations</h2>
			</div>


			<!-- bounceInDown -->
			<div class='animatedParent row article'>
			
				<div class='col-md-4'>
					
					<h3 class='animated bounceInDown padded'>bounceInDown</h3>
				</div>
				<div class='animatedParent col-md-6'>
<pre class='animated growIn slow'>
<?php echo htmlspecialchars("<h2 class='animated "); ?><span class='highlighter'><?php echo htmlspecialchars("bounceInDown"); ?></span><?php echo htmlspecialchars("'>It Works!</h2>"); ?>
</pre>
				</div>
				<div class='col-md-2'><div class='repeat animated bounceInDown slow'></div></div>
			</div>

			<div class='animatedParent'>
				<hr class='animated fadeIn slow' />
			</div>

			<!-- bounceInRight -->
			<div class='animatedParent row article'>
			
				<div class='col-md-4'>
					
					<h3 class='animated bounceInDown padded'>bounceInRight</h3>
				</div>
				<div class='animatedParent col-md-6'>
<pre class='animated growIn slow'>
<?php echo htmlspecialchars("<h2 class='animated "); ?><span class='highlighter'><?php echo htmlspecialchars("bounceInRight"); ?></span><?php echo htmlspecialchars("'>It Works!</h2>"); ?>
</pre>
				</div>
				<div class='col-md-2'><div class='repeat animated bounceInRight slow'></div></div>
			</div>

			<div class='animatedParent'>
				<hr class='animated fadeIn slow' />
			</div>
			
			<!-- bounceInUp -->
			<div class='animatedParent row article'>
			
				<div class='col-md-4'>
					
					<h3 class='animated bounceInDown padded'>bounceInUp</h3>
				</div>
				<div class='animatedParent col-md-6'>
<pre class='animated growIn slow'>
<?php echo htmlspecialchars("<h2 class='animated "); ?><span class='highlighter'><?php echo htmlspecialchars("bounceInUp"); ?></span><?php echo htmlspecialchars("'>It Works!</h2>"); ?>
</pre>
				</div>
				<div class='col-md-2'><div class='repeat animated bounceInUp slow'></div></div>
			</div>


			<div class='animatedParent'>
				<hr class='animated fadeIn slow' />
			</div>
			
			<!-- bounceInLeft -->
			<div class='animatedParent row article'>
			
				<div class='col-md-4'>
					
					<h3 class='animated bounceInDown padded'>bounceInLeft</h3>
				</div>
				<div class='animatedParent col-md-6'>
<pre class='animated growIn slow'>
<?php echo htmlspecialchars("<h2 class='animated "); ?><span class='highlighter'><?php echo htmlspecialchars("bounceInLeft"); ?></span><?php echo htmlspecialchars("'>It Works!</h2>"); ?>
</pre>
				</div>
				<div class='col-md-2'><div class='repeat animated bounceInLeft slow'></div></div>
			</div>

			<div class='animatedParent'>
				<hr class='animated fadeIn slow' />
			</div>
			
			<!-- bounceInLeft -->
			<div class='animatedParent row article'>
			
				<div class='col-md-4'>
					
					<h3 class='animated bounceInDown padded'>growIn</h3>
				</div>
				<div class='animatedParent col-md-6'>
<pre class='animated growIn slow'>
<?php echo htmlspecialchars("<h2 class='animated "); ?><span class='highlighter'><?php echo htmlspecialchars("growIn"); ?></span><?php echo htmlspecialchars("'>It Works!</h2>"); ?>
</pre>
				</div>
				<div class='col-md-2'><div class='repeat animated growIn slow'></div></div>
			</div>

			<div class='animatedParent'>
				<hr class='animated fadeIn slow' />
			</div>
			
			<!-- fadeIn -->
			<div class='animatedParent row article'>
			
				<div class='col-md-4'>
					
					<h3 class='animated bounceInDown padded'>fadeIn</h3>
				</div>
				<div class='animatedParent col-md-6'>
<pre class='animated growIn slow'>
<?php echo htmlspecialchars("<h2 class='animated "); ?><span class='highlighter'><?php echo htmlspecialchars("fadeIn"); ?></span><?php echo htmlspecialchars("'>It Works!</h2>"); ?>
</pre>
				</div>
				<div class='col-md-2'><div class='repeat animated fadeIn slowest'></div></div>
			</div>
		</div>
		<div class='animatedParent' data-sequence='1000'>
			<footer class='animated growIn' data-id='1'>
				<div class='container'>
					<div class='row'>
						<p class="col-md-10">&copy;2014 All rights reserved. Designed by Jack McCourt at <b><a href='http://jackonthe.net' class='animated bounceInRight' data-id='2'>jackonthe.net</a></b></p>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src='js/css3-animate-it.js'></script>

<script>
$(document).ready(function(){
	$.doTimeout(2500, function(){
		$('.repeat.go').removeClass('go');

		return true;
	});
	$.doTimeout(2520, function(){
		$('.repeat').addClass('go');
		return true;
	});
	
});

</script>