@include('layouts.head')
    <body>
    @include('layouts.nav')
    
    <div class="ogrodje" style="max-width:1400px;">
            <!-- levo-->
            <div class="oLevo">
                <div class="predlagano">
                    <div class="slika">
                        <img src="slike/besede.png" style="width:100%" alt="besede">
                    </div>

                    <div class="clanki">
                        <a href="#odprisliko1">BAR</a>
                        <div id="odprisliko1" class="odpri">
                            <div>   
                                <a href="#zaprisliko1" title="Zapri" class="zapri">X</a>
                                <img src="objave/bb.jpg" style="width:100%" alt="bb">
                            </div>
                        </div>
                    </div>
                    <div class="clanki">
                        <a href="#odprisliko2">RAY BAN</a>
                        <div id="odprisliko2" class="odpri">
                            <div>   
                                <a href="#zaprisliko2" title="Zapri" class="zapri">X</a>
                                <img src="objave/raj.jpg" style="width:100%" alt="raj">
                            </div>
                        </div>
                    </div>
               
                </div>

                <div class="predlagano">
                    <div class="slika">
                        <img src="slike/slovnica.png" style="width:100%" alt="slovnica">
                    </div>

                    <div class="clanki">
                        <a href="#odprisliko3">Končnice z ING/ED</a>
                        <div id="odprisliko3" class="odpri">
                            <div>   
                                <a href="#zaprisliko3" title="Zapri" class="zapri">X</a>
                                <img src="objave/ing.jpg" style="width:100%" alt="ing">
                            </div>
                        </div>
                    </div>
                    <div class="clanki">
                        <a href="#odprisliko4">Začetki z EN</a>
                        <div id="odprisliko4" class="odpri">
                            <div>   
                                <a href="#zaprisliko4" title="Zapri" class="zapri">X</a>
                                <img src="objave/en.jpg" style="width:100%" alt="en">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="oDesno">
                <a href="{{ url('/ideas/create') }}"><img src="../ikone/plus.png" style="width: 50px; margin: 15px 20px 20px 20px; "></a><br> 
                <h5><a href="{{ url('/ideas/create') }}"><b>Nova objava</b></a></h5><br>  
                @foreach ($ideas as $idea)
                    <div class="objavljeno">
                        @foreach ($users as $user)
                            @if ($user->id === $idea->user_id)
                                <?php $var = $user; ?>
                                <?php $id = $user->id; ?>
                            @endif
                         @endforeach
                        @if ($upo->id === $id)
                            {!! Form::open(['method' => 'DELETE','route' => ['ideas.destroy', $idea->id],'style'=>'float:right']) !!}
                            {!! Form::image('../ikone/izbrisi.png') !!}
                            {!! Form::close() !!}
                            <a href="{{ route('ideas.edit',$idea->id) }}" style="float: right;"><img src="../ikone/uredi.png" style="width: 50px; "></a>
                        @endif
                        <a href="{{ URL::to("profil/$id") }}" ><img src="../slike/{{ $var->avatar }}" style="border-radius: 50%; width: 50px; margin: 20px;"></a>
                        <h5><a href="{{ route('ideas.show',$idea->id) }}"><b>{{$idea->title}}</b></a></h5><br>
                        <h4>{{$idea->created_at}}</h4>
                        <p style="text-align: left; margin-left: 50px;">{!! $idea->content !!}</p>
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
        
        