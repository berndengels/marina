@extends('layouts.app')

@section('main')
    <div class="m-5 content-center w-3/4">
        <div class="w-full block">
            <div class="float-left">
                <a href="{{ route('admin.ports.index') }}" class="btn btn-secondary">
                    <i class="fas fa-backward"></i>
                    zur Liste
                </a>
            </div>
        </div>

        <div class="show-page mt-3">
            <div>
                <div>Name</div>
                <div class="col"><a href="{{ $port->web }}" target="_blank">{{ $port->name }}</a></div>
            </div>
            <div>
                <div>Region</div>
                <div>{{ $port->region->name }}</div>
            </div>
            <div>
                <div>Email</div>
                <div><a href="mailto:{{ $port->email }}" target="_blank">{{ $port->email }}</a></div>
            </div>
            <div>
                <div>Fon</div>
                <div>
                    <a href="tel:{{ $port->fon }}" target="_blank">
                        <i class="fas fa-phone"></i>
                        {{ $port->fon }}
                    </a>
                </div>
            </div>
            <div>
                <div>Ansprechpartner</div>
                <div>{{ $port->contact }}</div>
            </div>
            <div>
                <div>Adresse</div>
                <div>{{ $port->street }}, {{ $port->postcode }} {{ $port->location }}</div>
            </div>
            <div>
                <div>Caravans</div>
                <div>{{ $port->has_caravans ? 'Ja' : 'Nein' }}</div>
            </div>
            <div>
                <div>Hausboote</div>
                <div>{{ $port->has_houseboats ? 'Ja' : 'Nein' }}</div>
            </div>

        </div>
    </div>
@endsection
