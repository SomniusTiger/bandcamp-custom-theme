<!DOCTYPE HTML charset="UTF-8">
<html>
<head>
	<title>LAPFOX TRAX</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="The music of the multi-persona electronic musician Renard Queenston.">
	<meta name="keywords" content="lapfox trax hamilton ontario canada renard queenston aurastys darius d-mode-d fiab jackal kitcaliber kitsune^2 klippa mayhem negaren queenstons tqbf truxton">

	<!-- Styles -->
	<!--<link rel="stylesheet" type="text/css" href="libraries/antiscroll/antiscroll.css" />-->

	<link rel="stylesheet" type="text/css" href="styles.css" />

	<?php
		//Accesses the database!
		include("db.php");
		$db = DB::access();
	?>

</head>
<body>

	<div id="content">

		<nav>
			<div id="sideNavBtn"></div>

			<h1>LAPFOX TRAX</h1>

			<div id="sideNav" class="antiscroll-wrap">
				<div class="antiscroll-inner">
					<ul>
						<li>LATEST</li>
						<li id="personaExpand">
							<div id="personaBtn">PERSONAS</div> 
							<ul id ="personaList">

								<?php
									//Loop through all personas in database and write them into list items.
								
									$personaQuery = $db->query("select * from personas order by personas.order;");
									$personaQuery->execute();
									$personaList = $personaQuery->fetchAll();

									foreach($personaList as $index => &$persona)
									{
										$personaName = $persona['persona'];
										$shortPersona = preg_replace("/[^A-Za-z]/","", $persona['persona']);
										?>
											<li data-id="<?php echo $shortPersona ?>"> <?php echo $personaName ?> </li>
										<?php
									}

								?>

							</ul>
						</li>
						<li>ABOUT</li>
					</ul>
				</div>
			</div>

		</nav>

		<div id="overlay"></div>

		<div id="page">

			<header id="firstHeader">
				<h2>LATEST JAMS</h2>
			</header>
			<div id="latestMask" class="antiscroll-wrap">
				<div class="antiscroll-inner">
					<div id="latestSlider">
						<div class="album"><img src="http://f0.bcbits.com/img/a2601249692_10.jpg" width="240" height="240" alt="" /></div>
						<div class="album"><img src="http://f0.bcbits.com/img/a0099520245_10.jpg" width="240" height="240" alt="" /></div>
						<div class="album"><img src="http://f0.bcbits.com/img/a1326990847_10.jpg" width="240" height="240" alt="" /></div>
						<div class="album"><img src="http://f0.bcbits.com/img/a0841568314_10.jpg" width="240" height="240" alt="" /></div>
						<div class="album"><img src="http://f0.bcbits.com/img/a1157133075_10.jpg" width="240" height="240" alt="" /></div>
						<div class="albumLast"><img src="http://f0.bcbits.com/img/a2206206057_10.jpg" width="240" height="240" alt="" /></div>
					</div>
				</div>
			</div>

			<header>
				<h2>PERSONAS</h2>
			</header>

			<?php

				foreach($personaList as $index => &$persona)
				{
					$personaName = $persona['persona'];
					$shortPersona = preg_replace("/[^A-Za-z]/","", $persona['persona']);
					?>
						<h3 class="personaName"> <?php echo $personaName ?> </h3>
						<div class="personaMask antiscroll-wrap" data-id="<?php echo $shortPersona ?>">
							<div class="antiscroll-inner">
								<div class="personaSlider">
									<div class="album"><img src="http://f0.bcbits.com/img/a2601249692_10.jpg" width="240" height="240" alt="" /></div>
									<div class="album"><img src="http://f0.bcbits.com/img/a0099520245_10.jpg" width="240" height="240" alt="" /></div>
									<div class="albumLast"><img src="http://f0.bcbits.com/img/a1326990847_10.jpg" width="240" height="240" alt="" /></div>
								</div>
							</div>
						</div>
						
					<?php
				}

			?>

			<header>
				<h2>ABOUT</h2>
			</header>

			<footer>
				<div id="face"></div>
				<div id="blabber">
					<h3>Hi. I'm Ren.</h3>
					<p>I'm a music-making dog based in Hamilton, Ontario. I've been making music as my full-time occupation for 15 years. </p>
					<p>All of the music you see here is done by me, and the album illustrations are done by Squeedge and other awesome artists.</p>
					<p>I live on other places on the web, too! Check them out to keep updated on what I'm working on.</p>
				</div>
				<div id="social">
					<ul>
						<li class="first">Twitter</li>
						<li>Tumblr</li>
						<li class="last">Youtube</li>
					</ul>
				</div>
				<div class="clear"></div>
				<div id="endOfFooter"></div>
			</footer>

		</div>

	</div>


</body>

<!-- jQuery -->
<script type="text/javascript" src="jquery.js"></script>

<!-- ! EXTERNAL SCRIPT LIBRARIES ! -->

<script type="text/javascript" src="libraries/antiscroll/scrollbar.js"></script>
<script type="text/javascript" src="libraries/antiscroll/antiscroll.js"></script>

<!-- My Scripts -->
<script type="text/javascript" src="script.js"></script>



</html>