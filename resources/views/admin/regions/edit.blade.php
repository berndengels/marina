@extends('layouts.app')

@section('main')
    <div class="p-6">
        <a href="{{ route('admin.regions.index') }}"
           class="btn btn-secondary"><i class="fas fa-backward"></i> zurück</a>
        <div class="row">
            <div class="col-sm-12 col-lg-5">
                <x-form name="frm" method="post" :action="route('admin.regions.update', $region)" class="admin-frm">
                    @method('put')
                    @bind($region)
                    <x-form-select name="country_id" label="Land" :options="$countryOptions" floating/>
                    <x-form-select name="sea_id" label="Gewässer" :options="$seaOptions" floating/>
                    <x-form-input name="name" label="Name" floating/>
                    @endbind
                    <div class="mt-2">
                        <x-form-submit class="btn btn-primary">
                            <i class="fas fa-save"></i> Speichern
                        </x-form-submit>
                    </div>
                </x-form>
            </div>
            <div class="col-sm-12 col-lg-7">
            </div>
        </div>
    </div>
@endsection

