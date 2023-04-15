@extends('layouts.app')

@section('main')
    <div class="p-6">
        <a href="{{ route('admin.ports.index') }}"
           class="btn btn-secondary"><i class="fas fa-backward"></i> zurück</a>
        <div class="row">
            <div class="col-sm-12 col-lg-5">
                <x-form name="frm" method="post" :action="route('admin.ports.update', $port)" class="admin-frm">
                    @method('put')
                    @bind($port)
                    <x-form-group inline>
                        <x-form-checkbox id="acquired" name="acquired" label="Aquiriert"/>
                        <x-form-checkbox id="has_caravans" name="has_caravans" label="Hat Caravans"/>
                        <x-form-checkbox id="has_houseboats" name="has_houseboats" label="Hat Hausboote"/>
                    </x-form-group>
                    <x-form-select name="region_id" label="Region" :options="$regionOptions" floating/>
                    <x-form-input name="name" label="Name" floating/>
                    <x-form-input name="contact" label="Ansprechpartner" floating/>
                    <x-form-input type="url" name="web" label="Webpage" floating/>
                    <x-form-input name="fon" label="Fon" floating/>
                    <x-form-input type="email" name="email" label="Email" floating/>
                    <x-form-input name="street" label="Straße" floating/>
                    <x-form-input name="postcode" label="PLZ" floating/>
                    <x-form-input name="location" label="Ort" floating/>
                    <x-form-input type="number" step="1" min="1" name="number_of_berths" label="Anzahl Liegeplätze" floating/>

                    <x-form-input type="hidden" id="lat" name="lat"/>
                    <x-form-input type="hidden" id="lng" name="lng"/>

                    @endbind
                    <div class="mt-2">
                        <x-form-submit class="btn btn-primary">
                            <i class="fas fa-save"></i> Speichern
                        </x-form-submit>
                    </div>
                </x-form>
            </div>
            <div class="col-sm-12 col-lg-7">
                <div id="map" class="mt-sm-3 mt-lg-0"></div>
            </div>
        </div>
    </div>
@endsection

@push('inline-scripts')
    <script>
	    var lat = {{ $port->lat ?? 'null' }},
		    lng = {{ $port->lng ?? 'null' }},
            zoom = (lat && lng) ? 14 : 6,
            marker = null
        ;

		const map = L.map('map').setView([lat ?? 54, lng ?? 14], zoom),
			icon = L.icon({
				iconUrl: '/images/marker-icon.png',
				shadowUrl: '/images/marker-shadow.png',
				iconAnchor:   [10, 35],
			});
	    map.doubleClickZoom.disable();
	    if(lat && lng) {
		    marker = L.marker([lat, lng], {icon: icon}).addTo(map)
			    .bindPopup('Lat: '+lat+'<br>Lng: '+lng);
	    }
		L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		map.on('dblclick', e => {
			lat = e.latlng.lat;
			lng = e.latlng.lng;
			$("#lat").val(lat);
			$("#lng").val(lng);
			if(marker) {
				marker.setLatLng(e.latlng);
            }
		});
    </script>
@endpush

@push('styles')
    <script src="{{ mix('css/leaflet.css') }}"></script>
@endpush
@push('scripts')
    <script src="{{ mix('js/leaflet.js') }}"></script>
    <script src="{{ mix('js/leaflet-providers.js') }}"></script>
@endpush
