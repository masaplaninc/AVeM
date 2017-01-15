   @include('layouts.head')
    <body>
    <h1><a href="{{ url('/') }}"><img src="../slike/logo.png" alt="logo"></a></h1>
        <div class="ogrodje">
            <div class="oknoPrijava">
                <div id="prijavabox">
    
                    <div class="slika">
                    <img src="/slike/{{ $user->avatar }}" style="width: 300px; height: 300px; margin-top: 20px">
                    <h2>{{ $user->name }} {{$user->surname}}</h2>
                    <form enctype="multipart/form-data" action="{{ url('/uredisliko') }}" method="POST">
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" class = "ok">
                        <input type="submit" class="ok" value="POTRDI">
                    </form>
             
                </div>
            </div>
        </div>
   </body>
</html>
