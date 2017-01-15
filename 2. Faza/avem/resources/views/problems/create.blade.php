@include('layouts.gl')
    <body>
    	@include('layouts.nav')
		<form action= "/problems" method="POST">
			{{ csrf_field() }}
			<div class = "nova" >
				<label>Naslov</label><br>
				<input name="title" style="text-align: left;"></input><br>
				<label>Vsebina</label>
				<textarea   name="content" rows="15" ></textarea>
				<input type="submit" class ="ok" style="margin-top: 20px;" value="OBJAVI" ="">
			</div>
			
		</form>
        @include('layouts.skripta')
 	</body>
</html>