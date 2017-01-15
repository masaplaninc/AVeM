@include('layouts.glava')
    <body>
        @include('layouts.navi')
        <div class = "nova" >   
         @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opala!</strong> Prišlo je do probelma pri vnosu.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($comment, ['method' => 'PATCH','route' => ['comments.update', $comment->id]]) !!}

        <label>Vsebina</label><br>
        {!! Form::textarea('content', null, array('placeholder' => 'Vsebina')) !!}

        <button type="submit" style="margin-top: 20px;"  class="ok">POTRDI</button>
           
        {!! Form::close() !!}

        @include('layouts.skripta')

    </body>
</html>

