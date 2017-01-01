<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
		<script src="js/skripta.js"></script>
		<link rel="stylesheet" href="css/stil.css">
		<title>AVeM</title>
	</head>
	<body>
		<h1><a href="{{ url('/') }}"><img src="slike/logo.png" alt="logo"></a></h1>
		<nav>
			<div class = "orodnaVrstica">
				<ul>
					<li><a href="{{ url('/') }}">Objave</a></li>
                    <li><a href="{{ url('/ponudba') }}">Ponudba</a></li>
                    <li><a href="{{ url('/onas') }}">O nas</a></li>
                    <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
                    <li><a href="{{ url('/login') }}">Prijava</a></li>
				</ul>
			</div>
		</nav>
		<div class="ozadjeNapisov">
			<h2>Jezikovna šola AVeM</h2>
				<p class="beseda">Pri jezikovni šoli AVeM se ukvarjamo predvsem s poučevanjem angleščine. </p>
				<p>Metoda AVeM združuje najučinkovitejše načine učenja in jih povezuje z orodji AVeM, ki so nastala na podlagi 25-letnih izkušenj s poučevanjem in učenjem tujih jezikov. </p>
				<p>Naš cilj je, skupaj s tečajniki in obiskovalci naših strani, razširiti informacije o najboljših načinih učenja angleščine s konkretnimi primeri. </p>
		</div>
	</body>
</html>