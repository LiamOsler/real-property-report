<!-- Start Google Map Contents-->
	<div id ="map"></div><!--Map Container-->
		<script>
		
		  function initMap(){
			var map;
			
			var map = new google.maps.Map(document.getElementById('map'), {
			  zoom: 18,
			  center: {lat: 44.750383, lng: -63.467798},
			  mapTypeId: 'satellite'
			});
			
			var lot72XY = [
				{lat: 44.7500517, lng: -63.4672230},
				{lat: 44.7499980, lng: -63.4674412},
				{lat: 44.7498469, lng: -63.4675893},
				{lat: 44.7498184, lng: -63.4671099},
				{lat: 44.7500517, lng: -63.4672230},
			];		
			var lot72XY= new google.maps.Polygon({
				paths: lot72XY,
				strokeColor: '#000000',
				strokeOpacity: 1,
				strokeWeight: 3,
				fillColor: '#FF0000',
				fillOpacity: 0.5
			});			
			var lot72BZ = [
				{lat: 44.7501295, lng: -63.4672607},
				{lat: 44.7499616, lng: -63.4679429},
				{lat: 44.7498685, lng: -63.4679537},
				{lat: 44.7498469, lng: -63.4675893},
				{lat: 44.7499980, lng: -63.4674413},
				{lat: 44.7500517, lng: -63.4672230},
				{lat: 44.7501295, lng: -63.4672607},
			];		
			var lot72BZ= new google.maps.Polygon({
				paths: lot72BZ,
				strokeColor: '#000000',
				strokeOpacity: 1,
				strokeWeight: 3,
				fillColor: '#0000ff',
				fillOpacity: 0.5,
			});
			var lot72A = [
				{lat: 44.7503479, lng: -63.4673665},
				{lat: 44.7505035, lng: -63.4674419},
				{lat: 44.7504139, lng: -63.4678057},
				{lat: 44.7502584, lng: -63.4677303},
				{lat: 44.7503479, lng: -63.4673665},
			];		
			var lot72A= new google.maps.Polygon({
				paths: lot72A,
				strokeColor: '#000000',
				strokeOpacity: 1,
				strokeWeight: 3,
				fillColor: '#00ff00',
				fillOpacity: 0.5,
			});
			var lot72R = [
				{lat: 44.7505035, lng: -63.4674419},
				{lat: 44.7505553, lng: -63.4674671},
				{lat: 44.7504411, lng: -63.4679599},
				{lat: 44.7504634, lng: -63.4683953},
				{lat: 44.7503847, lng: -63.4690792},
				{lat: 44.7498907, lng: -63.4683267},
				{lat: 44.7498685, lng: -63.4679537},
				{lat: 44.7499616, lng: -63.4679429},
				{lat: 44.7501295, lng: -63.4672607},
				{lat: 44.7503479, lng: -63.4673665},
				{lat: 44.7502584, lng: -63.4677303},
				{lat: 44.7504139, lng: -63.4678057},
				{lat: 44.7505035, lng: -63.4674419},			
			];		
			var lot72R= new google.maps.Polygon({
				paths: lot72R,
				strokeColor: '#000000',
				strokeOpacity: 1,
				strokeWeight: 3,
				fillColor: '#ffff00',
				fillOpacity: 0.5,
			});			
				
			lot72XY.setMap(map);
			lot72BZ.setMap(map);
			lot72A.setMap(map);
			lot72R.setMap(map);				
			
		  }
		</script>

<!--Google Maps Script--> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASCUOG1y2uB8yOsXb53dEjS1JdG648USs&callback=initMap"></script>
<h3 style="margin-top: 10px;">Figure 1: Map of Property</h2>

<!---------------->
</div><!-- End Google Map Contents-->

<!--
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 24.886, lng: -70.268},
          mapTypeId: 'terrain'
        });
		
		map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 44.750383, lng: -63.467798},
				zoom: 17
			});
-->