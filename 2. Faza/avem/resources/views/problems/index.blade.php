@include('layouts.head')
</head>
    @include('layouts.nav')
    <body>

    <div class="ogrodje" style="max-width:1400px;">
            <!-- levo-->
            <div class="oLevo">
                <div class="predlagano">
                    <div class="slika">
                        <img src="slike/prakse.png" style="width:100%" alt="prakse">
                    </div>

                    <div class="clanki">
                        <a href="http://www.antimoon.com/other/challenges.htm">Three biggest challenges facing an English learner</a>
                    </div>
               
                    <div class="clanki">
                        <a href="http://www.antimoon.com/how/howtolearn.htm">A guide to learning English</a>
                    </div>

                    <div class="clanki">
                        <a href="http://www.wikihow.com/Learn-English#/Image:Learn-English-Step-16.jpg">How to Learn English</a>
                    </div>
                </div>

                <div class="predlagano">
                    <div class="slika">
                        <img src="slike/tezave.png" style="width:100%" alt="tezave">
                    </div>

                  <div class="clanki">
                        <p><b>Zatika se mi pri govorjenju</b></p>
                        <p> Ena najpogostejših napak pri učenju angleščine je premalo stika z jezikom. Učenje v šoli ali na tečaju za tekoče sporazumevanje po navadi ni dovolj. Nekateri ne gledajo filmov in TV serij, ne brskajo po angleških straneh na internetu, ne berejo člankov in knjig, ne uporabljajo angleških aplikacij, se ne sporazumevajo v angleščini izven izobraževalnih ustanov itd., ter tako ne dobijo dovolj INPUTa. 
                        Na eno enoto učenja (pouk, tečaj, domača naloga ipd.) priporočamo vsaj dve enoti »naravnega« stika z jezikom – spremljanje različnih medijev ali pogovor v angleščini.</p>
                    </div>
               
                    <div class="clanki">
                        <p><b>Nič se ne naučim</b></p>
                        <p> Če izvzamemo težave, ki so povezane z motnjami, kot je na primer disleksija, gre v večini primerov za slabe navade pri učenju: </p>
                        <p>-    prevajanje celih stavkov pri govorjenju namesto uporabe že naučenih angleških struktur;</p>
                        <p>-    učenje seznamov besed na pamet, brez asociacij, situacijskih povezav ali uporabe v stavkih;</p>
                        <p>-    neposvečanje pozornosti podrobnostim v stavku;</p>
                        <p>-    nerazločno govorjenje, ki ne vzpodbuja pomnjenje slovnično pravilnih stavkov;</p>
                        <p>-    pretirana zadržanost pri govorjenju itd.</p>
                        <p>Vsaka navada se lahko spremeni, če je volja dovolj močna. </p>
                    </div>
                </div>
            </div>
            <div class="oDesno">
                <a href="{{ url('/problems/create') }}"><img src="../ikone/plus.png" style="width: 50px; margin: 15px 20px 20px 20px; "></a><br> 
                <h5><a href="{{ url('/problems/create') }}"><b>Nova objava</b></a></h5><br>  
                @foreach ($problems as $problem)
                    <div class="objavljeno">
                        @foreach ($users as $user)
                            @if ($user->id === $problem->user_id)
                                <?php $var = $user; ?>
                                <?php $id = $user->id; ?>
                            @endif
                         @endforeach
                        @if ($user->id === $id)
                            {!! Form::open(['method' => 'DELETE','route' => ['problems.destroy', $problem->id],'style'=>'float:right']) !!}
                            {!! Form::image('../ikone/izbrisi.png') !!}
                            {!! Form::close() !!}
                            <a href="{{ route('problems.edit',$problem->id) }}" style="float: right;"><img src="../ikone/uredi.png" style="width: 50px; "></a>
                        @endif
                        <a href="{{ URL::to("profil/$id") }}"><img src="../slike/{{ $var->avatar }}" style="border-radius: 50%; width: 50px; margin: 20px;"></a>
                        <h5><a href="{{ route('problems.show',$problem->id) }}"><b>{{$problem->title}}</b></a></h5><br>
                        <h4>{{$problem->created_at}}</h4>
                        <p style="text-align: left;">{!! $problem->content !!}</p>
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
        
        