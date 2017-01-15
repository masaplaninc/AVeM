@include('layouts.head')
    <body>
        @include('layouts.oro')
        <div class="oknoPrijava">
            <div id="prijavabox">
            <img src="ikone/profil.jpg" alt="profil">
                <form class="prijava" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" name="name" title="Vnesite ime" placeholder="Ime" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                        <input id="surname" type="text" name="surname" title="Vnesite Priimek" placeholder="Priimek" value="{{ old('surname') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" name="email" title="Vnesite email" placeholder="E-mail" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
    
                    </div>
                    
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input id="username" type="text" name="username" title="Vnesite uporabinško ime" placeholder="Uporabniško ime"  value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
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
                    <input id="password-confirm" type="password"  name="password_confirmation" title="Potrdite geslo" placeholder="Potrdite geslo" required>
                    <button type="submit" class="ok">
                        REGISTRIRAJ SE
                    </button>

                </form>
            </div>
        </div>
    </body>
</html>
