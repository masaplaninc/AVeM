@include('layouts.head')
    <body>
    @include('layouts.nav')
    <div class="ogrodje" style="max-width:1400px;">
            <!-- levo-->
            <<div class="oLevo">
                <div class="predlagano">
                    <div class="slika">
                        <img src="../slike/beri.png" style="width:100%" alt="beri">
                    </div>

                    <div class="clanki">
                        <a href="https://www.theguardian.com/lifeandstyle/2011/jan/01/technology-ban-kids-home-experiment">I took my kids offline</a>
                    </div>
               
                    <div class="clanki">
                        <a href="http://www.wsj.com/articles/SB10001424052748704111504576059713528698754">Why Chinese Mothers Are Superior</a>
                    </div>

                    <div class="clanki">
                        <a href="http://digg.com/2016/placebo-effect-mosaic">Can We Condition Our Bodies To Treat Themselves?</a>
                    </div>
                    <div class="clanki">
                        <a href="http://www.newsinlevels.com/#">News in Levels</a>
                    </div>
                    <div class="clanki">
                        <a href="http://www.bbc.co.uk/learningenglish/">6 Minute English</a>
                    </div>
                </div>

                <div class="predlagano">
                    <div class="slika">
                        <img src="../slike/slusalke.png" style="width:100%" alt="slusalke">
                    </div>

                    <div class="zanimanja">
                        <h3><b>FILM</b></h3>
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=vdb4XGVTHkE">HUMAN Extended version VOL.1</a></li>
                            <li><a href="http://topdocumentaryfilms.com/">Top documentary films</a></li>
                        </ul>
                    </div>
               
                    <div class="zanimanja">
                        <h3><b>VIDEO</b></h3>
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=e-GVHelHjsM">The Emancipation of Prince</a></li>
                            <li><a href="https://www.youtube.com/watch?v=FyyT2jmVPAk">One Woman, 17 British Accents</a></li>
                            <li><a href="https://www.ted.com/talks/maysoon_zayid_i_got_99_problems_palsy_is_just_one">I got 99 problems...palsy is just one</a></li>
                        </ul>
                    </div>

                    <div class="zanimanja">
                        <h3><b>GLASBA</b></h3>
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=atqDzXocUcE">Cry me a river</a></li>
                            <li><a href="https://www.youtube.com/watch?v=XIucRL4iQTI">You raise me up</a></li>
                            <li><a href="https://www.youtube.com/watch?v=Yim4--J44gk">Counting Stars</a></li>
                        </ul>
                    </div>
                </div>
            </div>           
            <div class="oDesno">
                    @foreach ($users as $user)
                    <div class="objavljeno">
                            
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'float:right']) !!}
                            {!! Form::image('../ikone/izbrisi.png') !!}
                            {!! Form::close() !!}
                            <a href="{{ URL::to("profil/$user->id") }}"><img src="../slike/{{ $user->avatar }}" style="border-radius: 50%; width: 50px; margin: 20px;"></a>
                            <h5><a href="{{ URL::to("profil/$user->id") }}"><b>{{$user->name}} {{$user->surname}}</b></a></h5><br>
                             <h4>{{$user->created_at}}</h4>

                    </div>
                    @endforeach
                @if(Session::has('flash_message'))
                    <div class="sporocilo">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
        
        