<?php $upo = Auth::user(); ?>
<ul style="list-style-type: none; background-color:rgba(52, 73, 94,0.7);">
     <li><a href="{{ url('/') }}" style="margin: 2px 10px 0px 10px;"><img src="../../slike/logo.png" alt="logo" style="width: 80px;"></a></li>
       <li><a href="{{ url('/ponudba') }}">Ponudba</a></li>
        <li><a href="{{ url('/onas') }}">O nas</a></li>
        <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>

      <li class="dropdown" style="float: right;">
        <a href="#" class="dropbtn">{{ $upo->username }}</a>
        <div class="dropdown-content">
          <a href="{{ URL::to("profil/$upo->id") }}">Profil</a>
          <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Odjava</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
      </li>
</ul>