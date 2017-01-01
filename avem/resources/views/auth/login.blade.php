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
        <!--p class="podnaslov">Angleščina malo drugače</p-->
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
        <div class="oknoPrijava">
            <div id="prijavabox">
                <img src="ikone/profil.png" alt="profil">
                <form class="prijava" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" title="Vnesite email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" name="password" title="Vnesite geslo" placeholder="Geslo" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                 
                    <button type="submit" class="ok">
                        VPIS
                    </button>

                    <p><a href="{{ url('/password/reset') }}">Pozabljeno geslo?
                    </a></p>
                    <p><a href="{{ url('/register') }}">Registriraj se
                    </a></p>
                </form>
            </div>
        </div>
        <footer class="footer">
          <a href="uporabniki.html">Prijavi se kot administrator</a>
        </footer>
    </body>
</html>
