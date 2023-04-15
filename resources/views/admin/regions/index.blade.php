@extends('layouts.app')

@section('main')
    <div>
        <div class="index-header mt-3">
            <div class="float-left">
                <a
                    href="{{ route('admin.regions.create') }}"
                    class="btn btn-secondary"
                ><i class="far fa-plus-square"></i> Neueintrag</a>
            </div>
        </div>

        {{ $data->links() }}
        <table class="table w-full mt-3">
            <tr>
                <th class="hidden md:table-cell">ID</th>
                <th>Name</th>
                <th>Land</th>
                <th>Gewässer</th>
                <th colspan="2"><br></th>
            </tr>
            @foreach($data as $item)
                <tr>
                    <td class="hidden md:table-cell">{{ $item->id }}</td>
                    <td><a href="{{ route('admin.regions.show', $item) }}">{{ $item->name }}</a></td>
                    <td>{{ $item->country ? $item->country->de : null }}</td>
                    <td>{{ $item->sea ? $item->sea->name : null }}</td>
                    <td>
                        <a href="{{ route('admin.regions.edit', $item) }}" class="btn btn-sm btn-primary" title="Bearbeiten">
                            <i class="fas fa-edit"></i>
                            <span class="hidden md:visible">Edit</span>
                        </a>
                    </td>
                    <td>
                        <x-form action="{{ route('admin.regions.destroy', $item) }}"
                                class="m-0 p-0">
                            @method('delete')
                            <x-form-submit inline class="mt-0 btn btn-sm btn-danger delSoft">
                                <i class="fas fa-trash-alt"></i>
                                <span class="hidden md:visible">
                                    Löschen
                                </span>
                            </x-form-submit>
                        </x-form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $data->links() }}
    </div>
@endsection
