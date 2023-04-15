@extends('layouts.app')

@section('main')
    <div class="m-5 content-center w-3/4">
        <div class="w-full block">
            <div class="float-left">
                <a href="{{ route('admin.regions.index') }}" class="btn btn-secondary">
                    <i class="fas fa-backward"></i>
                    zur Liste
                </a>
            </div>
        </div>

        <div class="show-page mt-3">
            <div class="row">
                <div class="col">Name</div>
                <div class="col">{{ $region->name }}</div>
            </div>
            <div class="row">
                <div class="col">Land</div>
                <div class="col">{{ $region->country->de }}</div>
            </div>
            <div class="row">
                <div class="col">Gewässer</div>
                <div class="col">{{ $region->sea->name }}</div>
            </div>
        </div>
    </div>
@endsection
