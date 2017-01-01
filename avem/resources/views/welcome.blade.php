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
        <div class="obj">
            <div class="objavebox">
                <h2> <a href="ideje.html">IDEJE</a></h2>
                <div class="objavebox2">
                    <p class="beseda">Asociacije za hitro učenje novih besed in stavkov ter vzorci za obvladovanje slovnice.</p>        
                </div>
                <div class="objavebox3">
                    <img src="slike/ideje.jpg" style="width:100%" alt="ideje">
                </div>
            </div>


            <div class="objavebox">
                <h2> <a href="ucenje.html">UČINKOVITO UČENJE</a></h2>
                <div class="objavebox2">
                    <p class="beseda">Najboljši načini učenja ter kako prepoznati oziroma odpraviti učne težave.</p>    
                </div>
                <div class="objavebox3">
                    <img src="slike/ucenje.jpg" style="width:100%" alt="ucenje">
                </div>
            </div>

            <div class="objavebox">
                <h2> <a href="povezave.html">POVEZAVE</a></h2>
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