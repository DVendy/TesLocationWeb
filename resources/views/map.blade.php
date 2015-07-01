@extends('master')

@section('head')
@parent
<title>Location</title>

<script
src="http://maps.googleapis.com/maps/api/js">
</script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src="{{ URL::asset('js/markerwithlabel.js') }}" type="text/javascript"></script>

 <style type="text/css">
   .labels {
     color: black;
     font-family: "Lucida Grande", "Arial", sans-serif;
     font-size: 10px;
     font-weight: bold;
     text-align: center;
     width: 50px;     
     white-space: nowrap;
   }
 </style>


@stop
@section('content')
<div id="googleMap" style="width:100%;height:480px;"></div>
<div class="text-right" style="margin-top:25px;">
	 <button class="btn btn-warning" onclick="updateMarker()">Update</button>
</div>
<div class="row" style="margin-top:25px;">
	<div class="col-md-4">
		<table class="table table-striped table-bordered table-custom-otw">
			<thead>
				<tr>
					<th colspan="6"><h2>On the way </h2> </th>
				</tr>

				<tr>
					<th>ID Bis</th>
					<th>Jalur</th>
					<th>Kota Tujuan</th>
					<th>Peserta</th>
					<th>Keterangan</th>
					<th>Map</th>
				</tr>
			</thead>
			<tbody id="otw">
			<?php
				$ii = 1;
			?>
				@foreach($user as $key)
				@if($key->status == "On the way")
				<tr>
					<td>{{ $key->ID }}</td>
					<td>{{ $key->jalur }}</td>
					<td>{{ $key->keterangan }}</td>
					<td>{{ $key->isi }}</td>
					<td>{{ $key->keterangan2 }}</td>
					<td> 
						<div class="pull-right">
							<a onclick="myFunction('{{ $key->ID }}')" title="Search"><i class="icon-search3"></i></a>	&nbsp
							<a onclick="myModal('{{ $key->ID }}')" title="Detail" data-toggle="modal" data-target="#myModal"><i class="icon-vcard"></i></a>	
						</div>
					</td>
				</tr>
				<?php
					$ii++;
				?>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped table-bordered table-custom-op">
			<thead>
				<tr>
					<th colspan="6"><h2>On Problem</h2> </th>
				</tr>

				<tr>
					<th>ID Bis</th>
					<th>Jalur</th>
					<th>Kota Tujuan</th>
					<th>Peserta</th>
					<th>Keterangan</th>
					<th>Map</th>
				</tr>
			</thead>
			<tbody id="op">
			<?php
				$ii = 1;
			?>
				@foreach($user as $key)
				@if($key->status == "On problem")
				<tr>
					<td>{{ $key->ID }}</td>
					<td>{{ $key->jalur }}</td>
					<td>{{ $key->keterangan }}</td>
					<td>{{ $key->isi }}</td>
					<td>{{ $key->keterangan2 }}</td>
					<td> 
						<div class="pull-right">
							<a onclick="myFunction('{{ $key->ID }}')" title="Search"><i class="icon-search3"></i></a> &nbsp
							<a onclick="myModal('{{ $key->ID }}')" title="Detail" data-toggle="modal" data-target="#myModal"><i class="icon-vcard"></i></a>		
						</div>
					</td>
				</tr>
				<?php
					$ii++;
				?>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped table-bordered table-custom-oa">
			<thead>
				<tr>
					<th colspan="6"><h2>On Arrive</h2> </th>
				</tr>

				<tr>
					<th>ID Bis</th>
					<th>Jalur</th>
					<th>Kota Tujuan</th>
					<th>Peserta</th>
					<th>Keterangan</th>
					<th>Map</th>
				</tr>
			</thead>
			<tbody id="oa">
			<?php
				$ii = 1;
			?>
				@foreach($user as $key)
				@if($key->status == "On arrive")
				<tr>
					<td>{{ $key->ID }}</td>
					<td>{{ $key->jalur }}</td>
					<td>{{ $key->keterangan }}</td>
					<td>{{ $key->isi }}</td>
					<td>{{ $key->keterangan2 }}</td>
					<td> 
						<div class="pull-right">
							<a onclick="myFunction('{{ $key->ID }}')" title="Search"><i class="icon-search3"></i></a> &nbsp
							<a onclick="myModal('{{ $key->ID }}')" title="Detail" data-toggle="modal" data-target="#myModal"><i class="icon-vcard"></i></a>		
						</div>
					</td>
				</tr>
				<?php
					$ii++;
				?>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="icon-vcard"></i>Detail Bis</h4>
            </div>                
            <div class="modal-body">
                <table class="table">
					<tbody>
						<tr>
							<td>Id bis</td>
							<td id="d_id">PIWQ </td>
						</tr>
						<tr>
							<td>Tujuan</td>
							<td id="d_tujuan">PIWQ </td>
						</tr>
						<tr>
							<td>Jalur</td>
							<td id="d_jalur">PIWQ </td>
						</tr>
						<tr>
							<td>Klasifikasi</td>
							<td id="d_klasifikasi">PIWQ </td>
						</tr>
						<tr>
							<td>Nama</td>
							<td id="d_nama">PIWQ </td>
						</tr>
						<tr>
							<td>Handphone</td>
							<td id="d_hp">PIWQ </td>
						</tr>
						<tr>
							<td>Status</td>
							<td id="d_status">PIWQ </td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td id="d_keterangan">PIWQ </td>
						</tr>
					</tbody>
				</table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
	var MyCenter = new google.maps.LatLng(-7.36246687, 109.85229492);

	var marker=[
		@foreach($map as $key)
		['{{$key->bis->ID}}', new MarkerWithLabel({
				position:new google.maps.LatLng({{ $key->latitude }}, {{ $key->longitude }}),
				@if($key->bis->status == "On the way")
				icon:'images/bis_0.png',
				@elseif($key->bis->status == "On problem")
				icon:'images/bis_1.png',
				@else
				icon:'images/bis_2.png',
				@endif
				labelContent: '{{$key->bis->ID}}',
				labelAnchor: new google.maps.Point(22, 0),
				labelClass: "labels", // the CSS class for the label
				labelStyle: {opacity: 0.75}
			})],
		@endforeach
	]
	var map;

	function initialize()
	{
		var mapProp = {
			center:MyCenter,
			zoom:8,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};

		map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

		marker.forEach(function(element, index, array) {
		    marker[index][1].setMap(map);
		});
	}


	google.maps.event.addDomListener(window, 'load', initialize);

	//setInterval(updateMarker,500);

	function updateMarker() {
		
		marker.forEach(function(element, index, array) {
			$.get('map/' + marker[index][0] + '/lat', function( data ) {

				var LatLng = new google.maps.LatLng(data.latitude, data.longitude);
				marker[index][1].setPosition(LatLng);

			});
			$.get('map/' +  marker[index][0] + '/stat', function( data ) {

				if (data == "On the way"){
					marker[index][1].setIcon('images/bis_0.png');
				} else if (data == "On problem"){
					marker[index][1].setIcon('images/bis_1.png');
				} else{
					marker[index][1].setIcon('images/bis_2.png');
				}

			});
		});
		
		$.get('map/otw', function( data ) {
			document.getElementById("otw").innerHTML = data;
		});
		$.get('map/op', function( data ) {
			document.getElementById("op").innerHTML = data;
		});
		$.get('map/oa', function( data ) {
			document.getElementById("oa").innerHTML = data;
		});
		
	}

	function myFunction(mark) {
	    marker.forEach(function(element, index, array) {
	    	if (marker[index][0] == mark)
	    		map.panTo(marker[index][1].getPosition());
	    });
	    
	}

	function myModal(id) {
	    $.get('bis/' + id, function( data ) {
			document.getElementById("d_id").innerHTML = data.ID;
			document.getElementById("d_tujuan").innerHTML = data.keterangan;
			document.getElementById("d_jalur").innerHTML = data.jalur;
			document.getElementById("d_klasifikasi").innerHTML = data.klasifikasi;
			document.getElementById("d_nama").innerHTML = data.nama;
			document.getElementById("d_hp").innerHTML = data.hp;
			document.getElementById("d_status").innerHTML = data.status;
			document.getElementById("d_keterangan").innerHTML = data.keterangan2;
		});
	}

	$(document).ready(function() {
		$(".icon-vscard").click(function(event){
			alert("masuk");
			$.get('bis/' + event.target.id, function( data ) {
				document.getElementById("d_id").innerHTML = data.ID;
				document.getElementById("d_tujuan").innerHTML = data.keterangan;
				document.getElementById("d_jalur").innerHTML = data.jalur;
				document.getElementById("d_klasifikasi").innerHTML = data.klasifikasi;
				document.getElementById("d_nama").innerHTML = data.nama;
				document.getElementById("d_hp").innerHTML = data.hp;
				document.getElementById("d_status").innerHTML = data.status;
				document.getElementById("d_keterangan").innerHTML = data.keterangan2;
			});
		});
	});

</script>
@stop
