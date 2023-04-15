@extends('layouts.app')

@section('main')
    <div class="m-5 content-center">
        <div id="ports-map" class="w-100 h-100"></div>
    </div>
@endsection

@push('inline-scripts')
    <script>
		const map = L.map('ports-map').setView([54, 14], 8),
            data = {!! $data !!},
			icon = L.icon({
				iconUrl: '/images/marker-icon.png',
				shadowUrl: '/images/marker-shadow.png',
				iconAnchor:   [10, 35],
			}),
			geojsonMarkerOptions = {
				radius: 8,
				fillColor: "#cc0000",
				color: "#000",
				weight: 1,
				opacity: 1,
				fillOpacity: 0.8
			};

		L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		function onEachFeature(feature, layer) {
			if (feature.properties && feature.properties.name) {
				layer.bindPopup("<a target=\"_blank\" href=\"" + feature.properties.url + "\">" + feature.properties.name + "</a>");
			}
		}
		if(data) {
			const feature = L.geoJSON(data, {
				pointToLayer: (feature, latlng) => {
//					return L.Marker(latlng, {icon: icon});
					return L.circleMarker(latlng, geojsonMarkerOptions);
				},
				onEachFeature: onEachFeature
			}).addTo(map);
			map.fitBounds(feature.getBounds());
		}
    </script>
@endpush

@push('styles')
    <script src="{{ mix('css/leaflet.css') }}"></script>
@endpush
@push('scripts')
    <script src="{{ mix('js/leaflet.js') }}"></script>
    <!--script src="{{ mix('js/leaflet-providers.js') }}"></script-->
@endpush
