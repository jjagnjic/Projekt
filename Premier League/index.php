<?php
	#show errors
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu = (int)$_GET['menu']; }
	# Kada kliknete na link radite slanje vrijednosti kroz varijablu. U tom slučaju morate napraviti globalnu varijablu koja će dohvatiti taj podatak. 
	# Da ne pišete svaki puta $_GET['menu'] napravili smo ovdje novu varijablu koja će primiti vrijednost klika na link i zove se $menu
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Premier League</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Josip Jagnjić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>

	<div class="banner"></div>
	
	<?php include ("nav.php");
	print '<main>';
	if (!isset($menu) || $menu == 1) {
		print '
	     <h1>Premier League</h1>
		
		<figure>
		
			<img src="img/Premier-League.png" alt="HTML5" title="HTML5"/>
			<figcaption>The Premier League is the top level of the English football league system. Contested by 20 clubs, it operates on a system of promotion and relegation with the English Football League. </figcaption>
		
		</figure>
		<p>The Football Association Premier League Ltd is operated as a corporation and is owned by the 20 member clubs. Each club is a shareholder, with one vote each on issues such as rule changes and contracts. The clubs elect a chairman, chief executive, and board of directors to oversee the daily operations of the league. The Football Association is not directly involved in the day-to-day operations of the Premier League, but has veto power as a special shareholder during the election of the chairman and chief executive and when new rules are adopted by the league.</p>
		<p>One significant feature of the Premier League in the mid-2000s was the dominance of the so-called "Top Four" clubs: Arsenal, Chelsea, Liverpool and Manchester United.</p>
		<p>The years following 2009 marked a shift in the structure of the "Top Four" with Tottenham Hotspur and Manchester City both breaking into the top four places on a regular basis, turning the "Big Four" into the "Big Six".</p>
		<p>A system of promotion and relegation exists between the Premier League and the EFL Championship. The three lowest placed teams in the Premier League are relegated to the Championship, and the top two teams from the Championship promoted to the Premier League, with an additional team promoted after a series of play-offs involving the third, fourth, fifth and sixth placed clubs. The Premier League had 22 teams when it began in 1992, but this was reduced to the present 20-team format in 1995.</p>
		<p>Source: <a href="https://en.wikipedia.org/wiki/Premier_League" target="_blank">wikipedia</a></p>
		<p>Social media:<br>
			<a href="https://www.facebook.com/premierleague/" target="_blank"><img src="img/facebook.img" alt="Facebook" title="Facebook" style="width:24px; margin-top:0.4em"></a>
			<a href="https://twitter.com/premierleague" target="_blank"><img src="img/twitter.png" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
			<a href="https://www.youtube.com/channel/UCxLKwmLaqdXjeUUFvKNNovA" target="_blank"><img src="img/youtube.jpg" alt="Youtube" title="Youtube" style="width:24px; margin-top:0.4em"></a>
		</p>';
	}
	else if ($menu == 2) {
		print '
		<h1>News</h1>';
		// ovdje ide news
		include ("news.php");
	}
	else if ($menu == 3) {
		print '
		<h1>Contact form</h1>';
		// ovdje ide Contact
		include ("contact.php");
	}
	else if ($menu == 4) {
		print '
		<h1>About Us</h1>';
		// ovdje ide Contact
		include ("about.php");
	}
	else if ($menu == 5) {
		print '
		<h1>Gallery</h1>';
		// ovdje ide Contact
		include ("gallery.php");
	}
	else if ($menu == 6) {
		print '
		<h1>Registration</h1>';
		// ovdje ide Registration
		include ("registration.php");
	}
	else if ($menu == 7) {
		print '
		<h1>Sign In</h1>';
		// ovdje ide Sign In
		include ("signin.php");
	}
	print '
	</main>';
	include ("footer.php");?>
	
	</body>
</html>