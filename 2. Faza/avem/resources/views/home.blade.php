@include('layouts.head')
    <body>
        @include('layouts.oro')
        <div class="obj">
            <div class="objavebox">
                <h2> <a href="{{ url('/ideas') }}">IDEJE</a></h2>
                <div class="objavebox2">
                    <p class="beseda">Asociacije za hitro učenje novih besed in stavkov ter vzorci za obvladovanje slovnice.</p>        
                </div>
                <div class="objavebox3">
                    <img src="slike/ideje.jpg" style="width:100%" alt="ideje">
                </div>
            </div>


            <div class="objavebox">
                <h2> <a href="{{ url('/problems') }}">UČINKOVITO UČENJE</a></h2>
                <div class="objavebox2">
                    <p class="beseda">Najboljši načini učenja ter kako prepoznati oziroma odpraviti učne težave.</p>    
                </div>
                <div class="objavebox3">
                    <img src="slike/ucenje.jpg" style="width:100%" alt="ucenje">
                </div>
            </div>

            <div class="objavebox">
                <h2> <a href="{{ url('/posts') }}">POVEZAVE</a></h2>
                <div class="objavebox2">
                    <p class="beseda">Najboljši filmi, serije, videi, internetne strani, članki in knjige za učenje angleščine.</p> 
                </div>
                <div class="objavebox3">
                    <img src="slike/povezave.jpg" style="width:100%" alt="povezave">
                </div>
            </div>
        </div>
    </body>
        
</html>