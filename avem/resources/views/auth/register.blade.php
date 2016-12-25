<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
        <script src="js/skripta.js"></script>
        <link rel="stylesheet" href="css/stil.css">
        <title>AVeM</title>
    </head>
    <body background="slike/1.jpg">
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
			<div id="registracijabox">
				<img src="ikone/profil.png" alt="profil">
				<form class="prijava" role="form" method="POST" action="{{ url('/register') }}">
					    {{ csrf_field() }}
	    		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					
		            <input type="text" name="name" title="Vnesite ime" placeholder="Ime" value="{{ old('name') }}" required autofocus>
		            @if ($errors->has('name'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('name') }}</strong>
		                </span>
		            @endif
		        </div>
	    		<div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
		            <input type="text" name="surname" title="Vnesite Priimek" placeholder="Priimek" value="{{ old('surname') }}" required autofocus>
		            @if ($errors->has('surname'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('surname') }}</strong>
		                </span>
		            @endif
		        </div>
		        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		            <input type="email" name="email" title="Vnesite email" placeholder="E-mail" value="{{ old('email') }}" required />
		            @if ($errors->has('email'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('email') }}</strong>
		                </span>
		            @endif
		        </div>
		        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	              	<input type="text" name="username" title="Vnesite uporabinško ime" placeholder="Uporabniško ime" value="{{ old('username') }}" required autofocus>
	              	@if ($errors->has('username'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('username') }}</strong>
		                </span>
		            @endif
		        </div>
		        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	             	<input type="password" name="password"  title="Vnesite geslo" placeholder="Geslo"  required />
		            @if ($errors->has('password'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('password') }}</strong>
		                </span>
		            @endif
	    		</div>

	     		<input type="password" name="password" pattern=".*" title="Potrdite geslo" placeholder="Potrdite geslo"  required />
	           	<button type="submit" class="ok">REGISTRIRAJ SE</button>
				</form>
	        </div>
    	</div>
		<footer class="footer">
		  <a href="uporabniki.html">Prijavi se kot administrator</a>
		</footer>
	</body>
</html>

