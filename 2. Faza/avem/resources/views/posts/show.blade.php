@include('layouts.gl')
    <body>
        @include('layouts.nav')
        <div class="oDesno" style="margin-left: 250px">
            <div class="objavljeno">
                @foreach ($users as $user)
                    @if ($user->id === $post->user_id)
                        <?php $var = $user; ?>
                        <?php $id = $user->id; ?>
                    @endif
                 @endforeach
                @if ($user->id === $id)
                    {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'float:right']) !!}
                    {!! Form::image('../ikone/izbrisi.png') !!}
                    {!! Form::close() !!}
                    <a href="{{ route('posts.edit',$post->id) }}" style="float: right;"><img src="../../ikone/uredi.png" style="width: 50px; "></a>
                @endif
                <a href="{{ URL::to("profil/$id") }}"><img src="../../slike/{{ $var->avatar }}" style="border-radius: 50%; width: 50px; margin: 20px;"></a>
                <h5><a href="{{ URL::to("profil/$id") }}"><b>{{$post->title}}</b></a></h5><br>
                <h4>{{$post->created_at}}</h4>
                <p style="text-align: left;">{!! $post->content !!}</p>
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
                    {!! Form::open(['method' => 'DELETE','route' => ['comments.destroy', $comment->id],'style'=>'float:right']) !!}
                    {!! Form::image('../ikone/izbrisi.png') !!}
                    {!! Form::close() !!}
                    <a href="{{ route('comments.edit',$comment->id) }}" style="float: right;"><img src="../../ikone/uredi.png" style="width: 50px; "></a>
                @endif
                <a href="{{ URL::to("profil/$id") }}"><img src="../../slike/{{ $var->avatar }}" style="border-radius: 50%; width: 50px; margin: 20px;"></a>
                <p style="text-align: left; margin: 40px;" >{!! $comment->content !!}</p>  

            </div>
            @endforeach
            <form action= "/comments" method="POST">
                    {{ csrf_field() }}
                <div class = "nova" >
                    <label>Komentar</label>
                    <input type="hidden" name="data" value="{{ $post->id }}">
                    <textarea   name="content" rows="15" ></textarea>
                    <input type="submit" class ="ok" style="margin-top: 20px;" value="OBJAVI" ="">
                </div>
                
            </form>
        </div>
         @include('layouts.skripta')
    </body>
</html>
