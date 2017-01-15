   @include('layouts.gl')
    <body>
        <div class="ogrodje"> 
        <div class="oknoPrijava">
            <div id="prijavabox">
                <img src="/slike/{{ $user->avatar }}">
                <h2>{{ $user->username }}</h2>
                <form enctype="multipart/form-data" action="{{ url('/urediprofil') }}" method="POST" class ="prijava">
                      {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label>Ime</label>
                            <input type="text"  name="name" value="{{ $errors->has('name') ? '' : $user->name }}" >

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                       
                    </div>
                    <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                        <label>Priimek</label>
                            <input type="text" name="surname" value="{{ $errors->has('surname') ? '' : $user->surname }}" >

                            @if ($errors->has('surname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('surname') }}</strong>
                                </span>
                            @endif
                       
                    </div>
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label>Uporabniško ime</label>
                            <input type="text" name="username" value="{{ $errors->has('username') ? '' : $user->username }}" >

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                       
                    </div>
                    <div class="form-group{{ $errors->has('aboutme') ? ' has-error' : '' }}">
                        <label>O Meni</label>
                            <input type="text"  name="aboutme" value="{{ $errors->has('aboutme') ? '' : $user->aboutme }}" >

                            @if ($errors->has('aboutme'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('aboutme') }}</strong>
                                </span>
                            @endif
                       
                    </div>
                    <div class="form-group{{ $errors->has('films') ? ' has-error' : '' }}">
                        <label>Filmi</label>
                            <input type="text" name="films" value="{{ $errors->has('name') ? '' : $user->films }}" >

                            @if ($errors->has('films'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('films') }}</strong>
                                </span>
                            @endif           
                    </div>
                    <div class="form-group{{ $errors->has('music') ? ' has-error' : '' }}">
                        <label>Glasba</label>

                            <input type="text" name="music" value="{{ $errors->has('music') ? '' : $user->music }}" >

                            @if ($errors->has('music'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('music') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group{{ $errors->has('literature') ? ' has-error' : '' }}">
                        <label>Literatura</label>
                            <input type="text" name="literature" value="{{ $errors->has('literature') ? '' : $user->literature }}" >

                            @if ($errors->has('literature'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('literature') }}</strong>
                                </span>
                            @endif
                    </div>

                       <div class="form-group">
                        <label>E-mail</label>

                            <input type="email" disabled class="form-control" name="email" value="{{ $user->email }}" >
                       </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Geslo</label>
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label>Potrdite geslo</label>
                            <input type="password" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif

                    </div>  
                     <p><a href="{{ url('/uredisliko') }}">Zamenjaj profilno sliko</a></p>
                    <button type="submit" class="ok"><i class="fa fa-btn fa-user"></i>POSODOBI</button>

                </form>
             </div>
    </body>
</html>
