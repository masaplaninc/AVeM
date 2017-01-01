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
			<p><img src="ikone/lokacija.png" alt="lokacija">Naslov: Tržaška cesta 2, 1000 Ljubljana</p>
			<p><img src="ikone/telefon.png" alt="telefon">Telefon: 01 426 02 64</p>
			<p><img src="ikone/email.png" alt="email"> Email: davorin.planinc@telemach.net</p>
		</div>
		<div class="kontakt">
			<h2>Piši nam</h2>
			<input type="text" name="name" pattern=".*" title="Vnesite ime" placeholder="Ime" required />
            <input type="email" name="email" pattern=".*" title="Vnesite email" placeholder="E-mail" required />
            <input type="text" name="theme" pattern=".*" title="Vnesite Temo" placeholder="Tema" required />
            <input type="text" name="message" pattern=".*" title="Vnesite Sporočilo" placeholder="Sporočilo" required />
            <input class="gumb" type="submit" name="submit" value="POŠLJI"/>
		</div>
		<div id="map" ></div>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSNsz9tqSeLTyFw8HpRMtm46Z-iz04n3U&callback=zemljevid"
  type="text/javascript"></script>

	</body>

		
</html>