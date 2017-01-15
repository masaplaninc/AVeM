@include('layouts.gl')
    <body>
        @include('layouts.nav')
        <div class="oDesno" style="margin-left: 250px">
            <div class="objavljeno">
                @foreach ($users as $user)
                    @if ($user->id === $idea->user_id)
                        <?php $var = $user; ?>
                        <?php $id = $user->id; ?>
                    @endif
                 @endforeach
                @if ($user->id === $id)
                    {!! Form::open(['method' => 'DELETE','route' => ['ideas.destroy', $idea->id],'style'=>'float:right']) !!}
                    {!! Form::image('../ikone/izbrisi.png') !!}
                    {!! Form::close() !!}
                    <a href="{{ route('ideas.edit',$idea->id) }} " style="float: right;"><img src="../../ikone/uredi.png" style="width: 50px; "></a>
                @endif
                <a href="{{ URL::to("profil/$id") }}"><img src="../../slike/{{ $var->avatar }}" style="border-radius: 50%; width: 50px; margin: 20px;"></a>
                <h5><a href="{{ URL::to("profil/$id")  }}"><b>{{$idea->title}}</b></a></h5><br>
                <h4>{{$idea->created_at}}</h4>
                <p style="text-align: left;">{!! $idea->content !!}</p>
            </div>
            @foreach ($comments as $comment)
            <div class="objavljeno">
                @foreach ($users as $user)
                    @if ($user->id === $comment->user_id)
                        <?php $var = $user; ?>
                        <?php $id = $user->id; ?>
                    @endif
                 @endforeach
                @if ($user->id === $id)
                    {!! Form::open(['method' => 'DELETE','route' => ['icomments.destroy', $comment->id],'style'=>'float:right']) !!}
                    {!! Form::image('../ikone/izbrisi.png') !!}
                    {!! Form::close() !!}
                    <a href="{{ route('icomments.edit',$comment->id) }}" style="float: right;"><img src="../../ikone/uredi.png" style="width: 50px; "></a>
                @endif
                <a href="{{ URL::to("profil/$id") }}"><img src="../../slike/{{ $var->avatar }}" style="border-radius: 50%; width: 50px; margin: 20px;"></a>

                <p style="text-align: left;">{!! $comment->content !!}</p>
            </div>
            @endforeach
            <form action= "/icomments" method="POST">
                    {{ csrf_field() }}
                <div class = "nova" >
                    <label>Komentar</label>
                    <input type="hidden" name="data" value="{{ $idea->id }}">
                    <textarea   name="content" rows="15" ></textarea>
                    <input type="submit" class ="ok" style="margin-top: 20px;" value="OBJAVI" ="">
                </div>
                
            </form>
        </div>
            
        @include('layouts.skripta')
    </body>
</html>
