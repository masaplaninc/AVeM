<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
		<script src="/jsskripta.js"></script>
		<link rel="stylesheet" href="css/stil.css">
		<title>AVeM</title>
	</head>
	<body>
		<h1><a href="{{ url('/') }}"><img src="slike/logo.png" alt="logo"></a></h1>
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
			<h2>Fizične osebe</h2>
				<p class="beseda">Individualni tečaji in inštrukcije potekajo v sklopih po 20, 30, 40 in 60 ur.</p>
				<ul>
					<li><p class="beseda">inštrukcije......................................18€</p></li> 
					<li><p class="beseda">inštrukcije (s popravo besedil)....20€</p></li> 
					<li><p class="beseda">med inštrukcijami in poukom.....23€</p></li> 
					<li><p class="beseda">individualni pouk.........................28€</p></li> 
				</ul>
			<h2>Podjetja</h2>
				<p class="beseda">Pošiljite povpraševnje za:</p>
				<ul>
					<li><p>individualni pouk</p></li> 
					<li><p class="beseda">pouk v paru</p></li> 
					<li><p class="beseda">mala skupina (3-5) </p></li> 
					<li><p class="beseda">večja skupina (6-8)</p></li> 
				</ul>
				<p class="beseda">na davorin.planinc@telemach.net</p>
		</div>

	</body>

		
</html>