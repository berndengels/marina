@extends('layouts.app')

@section('main')
    <div class="m-5 content-center w-3/4">
        <div class="w-full block">
            <div class="float-left">
                <a href="{{ route('public.ports.index') }}" class="btn btn-secondary">
                    <i class="fas fa-backward"></i>
                    zur Liste</a>
            </div>
        </div>

        <div class="show-page mt-3">
            <div class="row">
                <div class="col">Name</div>
                <div class="col"><a href="{{ $port->web }}" target="_blank">{{ $port->name }}</a></div>
            </div>
            <div class="row">
                <div class="col">Liegeplätze</div>
                <div class="col">{{ $port->number_of_berths }}</div>
            </div>
            <div class="row">
                <div class="col">Region</div>
                <div class="col">{{ $port->region->name }}</div>
            </div>
            <div class="row">
                <div class="col">Email</div>
                <div class="col"><a href="mailto:{{ $port->email }}" target="_blank">{{ $port->email }}</a></div>
            </div>
            <div class="row">
                <div class="col">Fon</div>
                <div class="col">
                    <a href="tel:{{ $port->fon }}" target="_blank">
                        <i class="fas fa-phone"></i>
                        {{ $port->fon }}
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">Ansprechpartner</div>
                <div class="col">{{ $port->contact }}</div>
            </div>
            <div class="row">
                <div class="col">Adresse</div>
                <div class="col">{{ $port->street }}, {{ $port->postcode }} {{ $port->location }}</div>
            </div>
            <div class="row">
                <div class="col">Caravans</div>
                <div class="col">{{ $port->has_caravans ? 'Ja' : 'Nein' }}</div>
            </div>
            <div class="row">
                <div class="col">Hausboote</div>
                <div class="col">{{ $port->has_houseboats ? 'Ja' : 'Nein' }}</div>
            </div>
        </div>
    </div>
@endsection
