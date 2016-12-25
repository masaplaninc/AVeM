
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


        <div id="prijavabox">
            <form class="prijava" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <img src="ikone/profil.png" alt="profil">
            <input type="text" name="username" title="Vnesite  uporabniško ime" placeholder="Uporabniško ime" required />
            <input type="password" name="password" title="Vnesite geslo" placeholder="Geslo"  required />
             @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <button type="submit" class="ok">VPIS</button> 
            <p><a href="{{ url('/password/reset') }}">Pozabljeno geslo?</a></p>
            </form>
        </div>

</div>
        <footer class="footer">
          <a href="uporabniki.html">Prijavi se kot administrator</a>
        </footer>
    </body>
</html>

