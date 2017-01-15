@include('layouts.head')
    <body>
        @include('layouts.oro')
        <div class="oknoPrijava">
            <div id="prijavabox">
                <img src="ikone/profil.jpg" alt="profil">
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
    </body>
</html>
