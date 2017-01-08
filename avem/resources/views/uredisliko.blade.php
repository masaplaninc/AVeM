<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
        <script src="../js/skripta.js"></script>
        <link rel="stylesheet" href="../css/stil.css">
        <title>AVeM</title>
    </head>
    <body>
    <h1><a href="{{ url('/') }}"><img src="../slike/logo.png" alt="logo"></a></h1>
        <div class="ogrodje">
          
            <!-- levo-->
            <div class="pLevo">
                <div class="slika">
            <img src="/slike/{{ $user->avatar }}">
            <h2>{{ $user->name }} {{$user->surname}}</h2>
            <form enctype="multipart/form-data" action="{{ url('/uredisliko') }}" method="POST">
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" class = "ok">
                <input type="submit" class="ok" >
            </form>
             </div>
                <div class="omeni">
                  <p>Arhitektka</p>
                  <p>Ljubljana</p>
                </div>
                <div class="zanimanja">
                    <h3><b>Najboljši angleški filmi</b></h3>
                    <ul>
                        <li class="beseda">Star wars</li>
                        <li class="beseda">Lord of the rings</li>
                    </ul>
                </div>
           
                <div class="zanimanja">
                    <h3><b>Najboljša angleška glasba</b></h3>
                    <ul>
                        <li class="beseda">Queens</li>
                        <li class="beseda">Beatles</li>
                        <li class="beseda">The Rolling Stones</li>
                    </ul>

                </div>

                <div class="zanimanja">
                    <h3><b>Najboljša angleška literatura</b></h3>
                    <ul>
                        <li class="beseda">Harry Potter</li>
                        <li class="beseda">Moby-Dick</li>
                    </ul>
                </div>
            </div>

            <!-- desno -->
            <div class="pDesno">
            
              <div class="mojeObjave">
                <h2>Moje objave</h2>
                <div class="napisal">
                    <h6><img src="../ikone/uredi.png" title="uredi" alt="uredi"></h6>
                    <h5><a href="ucenje.html"><b>Uči se besede preko pesmi</b></a></h5>
                    <h4>9.10.2016</h4>
                    <p class="beseda">Tukaj bo bolj podrobno opisano vprašanje ali trditev, ki ga oseba postavlja.</p>
                </div>
                <div class="napisal">
                    <h6><img src="../ikone/uredi.png" title="uredi" alt="uredi"></h6>
                    <h5><a href="povezave.html"><b>Super video!</b></a></h5>
                    <h4>16.11.2016</h4>
                    <p class="beseda">Tukaj bo bolj podrobno opisano vprašanje ali trditev, ki ga oseba postavlja.</p>
                </div>
                <div class="napisal">
                    <h6><img src="../ikone/uredi.png" title="uredi" alt="uredi"></h6>
                    <h5><a href="ideje.html"><b>5 najboljših asociacij.</b></a></h5>
                    <h4>20.11.2016</h4>
                    <p class="beseda">Tukaj bo bolj podrobno opisano vprašanje ali trditev, ki ga oseba postavlja.</p>
                </div>
                <div class="napisal">
                    <h6><img src="../ikone/uredi.png" title="uredi" alt="uredi"></h6>
                    <h5><a href="ucenje.html"><b>Kako naj si zapomnim besedo prosecute?</b></a></h5>
                    <h4>20.11.2016</h4>
                    <p class="beseda">Tukaj bo bolj podrobno opisano vprašanje ali trditev, ki ga oseba postavlja.</p>
                </div>
              </div>

            </div>

        </div>

        <footer class="footer">
          <a href="avtorske.html">Avtorske pravice</a>
        </footer>
    </body>
</html>
