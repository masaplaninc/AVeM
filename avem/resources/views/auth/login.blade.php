<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
		<script src="js/skripta.js"></script>
		<link rel="stylesheet" href="css/stil.css">
		<title>AVeM</title>
	</head>
	<body>
		<h1><a href="index.html"><img src="slike/logo.png" alt="logo"></a></h1>
		<nav>
			<div class = "orodnaVrstica">
				<ul>
					<li><a href="index.html">Objave</a></li>
					<li><a href="ponudba.html">Ponudba</a></li>
					<li><a href="onas.html">O nas</a></li>
					<li><a href="kontakt.html">Kontakt</a></li>
					<li><a href="prijava.html">Prijava</a></li>
				</ul>
			</div>
		</nav>
		<div class="oknoPrijava">
			<div class="zavihki">
				<input type="submit" onclick="zavihek('prijavabox','registracijabox', 'gumbP','gumbR');" id="gumbP" value="Prijava">
				<input type="submit" onclick="zavihek('registracijabox','prijavabox','gumbR', 'gumbP');" id="gumbR" value="Registracija">
			</div>
			<div id="prijavabox">
				<img src="ikone/profil.png" alt="profil">
				 <form class="prijava" method="POST" action="/send_prijava">
	              	<input type="text" name="username" pattern=".*" title="Vnesite  uporabniško ime" placeholder="Uporabniško ime" required />
	             	<input type="password" name="password" pattern=".*" title="Vnesite geslo" placeholder="Geslo"  required />
	             	<input class="ok" type="submit" name="submit" value="VPIS" />
             	<p><a href="prijava.html">Pozabljeno geslo</a></p>
            	</form>
			</div>
			<div id="registracijabox">
				<img src="ikone/profil.png" alt="profil">
				<form class="prijava" method="POST" action="/send_prijava">
		            <input type="text" name="name" pattern=".*" title="Vnesite ime" placeholder="Ime" required />
		            <input type="text" name="surname" pattern=".*" title="Vnesite Priimek" placeholder="Priimek" required />
		            <input type="email" name="email" pattern=".*" title="Vnesite email" placeholder="E-mail" required />
	              	<input type="text" name="username" pattern=".*" title="Vnesite uporabinško ime" placeholder="Uporabniško ime" required />
	             	<input type="password" name="password" pattern=".*" title="Vnesite geslo" placeholder="Geslo"  required />
	             	<input type="password" name="password" pattern=".*" title="Potrdite geslo" placeholder="Potrdite geslo"  required />
	             	<input type="text" name="firma" pattern=".*" title="Firma" placeholder="Firma*"/>
	               	<input class="ok" type="submit" name="submit" value="REGISTRIRAJ SE"/>
            	</form>
			</div>
		</div>
		<footer class="footer">
		  <a href="uporabniki.html">Prijavi se kot administrator</a>
		</footer>
	</body>
</html>
