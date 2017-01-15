@include('layouts.gl')
    <body>
        @include('layouts.orod')
        <div class="oknoPrijava">
            <div id="prijavabox">    
                <div class="panel-heading" style="color: white">Resetiraj geslo</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" style="width: 210px; height: 30px; margin: 20px;" placeholder="E-mail" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" style="width: 210px; height: 30px; margin: 20px;" placeholder="Novo geslo" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    
                            <input id="password-confirm" type="password" class="form-control" style="width: 210px; height: 30px; margin: 20px;" placeholder="Potrdite geslo" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="ok">RESETIRAJ</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

