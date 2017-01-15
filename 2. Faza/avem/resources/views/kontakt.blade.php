@include('layouts.head')
	<body>
	   @include('layouts.oro')
	
		<div class="ozadjeNapisov">
			<p><img src="ikone/lokacija.png" alt="lokacija">Naslov: Tržaška cesta 2, 1000 Ljubljana</p>
			<p><img src="ikone/telefon.png" alt="telefon">Telefon: 01 426 02 64</p>
			<p><img src="ikone/email.png" alt="email"> Email: davorin.planinc@telemach.net</p>
		</div>

		<div id="map" ></div>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSNsz9tqSeLTyFw8HpRMtm46Z-iz04n3U&callback=zemljevid"
  type="text/javascript"></script>

	</body>

		
</html>