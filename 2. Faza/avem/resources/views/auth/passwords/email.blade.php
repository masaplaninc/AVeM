@include('layouts.gl')
    <body>
      @include('layouts.orod')
         <div class="oknoPrijava">
            <div id="prijavabox">
                <div style="color: white" >Pozabljeno Geslo</div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" type="email" c name="email" style="width: 210px; height: 30px; margin: 20px;" placeholder="E-mail" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>

                    <button type="submit" class="ok">POŠLJI</button>

                </form>
            </div>
        </div>
    </body>
</html>

