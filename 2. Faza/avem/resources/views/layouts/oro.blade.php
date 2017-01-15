<h1><a href="{{ url('/') }}"><img src="/slike/logo.png" alt="logo"></a></h1>
        <!--p class="podnaslov">Angleščina malo drugače</p-->
<nav>
    <div class = "orodnaVrstica">
        <ul>
            <li><a href="{{ url('/') }}">Objave</a></li>
            <li><a href="{{ url('/ponudba') }}">Ponudba</a></li>
            <li><a href="{{ url('/onas') }}">O nas</a></li>
            <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
            @if (Auth::guest())
                <li style="float:right"><a href="{{ url('/login') }}" >Prijava</a></li>
            @else
                <?php $upo = Auth::user(); ?>
                <li style="float:right"><a href="{{ URL::to("profil/$upo->id") }}" >{{ Auth::user()->name }}</a></li>
            @endif
        </ul>
    </div>
</nav>