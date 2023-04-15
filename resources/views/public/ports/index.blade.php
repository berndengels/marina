@extends('layouts.app')

@section('main')
    <div>
        {{ $data->links() }}
        <table class="table w-full mt-3">
            <tr>
                <th class="hidden md:table-cell">ID</th>
                <th>Name</th>
                <th>Liegeplätze</th>
                <th>Ort</th>
                <th>Kontakt</th>
                <th>Fon</th>
            </tr>
            @foreach($data as $item)
                <tr>
                    <td class="hidden md:table-cell">{{ $item->id }}</td>
                    <td><a href="{{ route('public.ports.show', $item) }}">{{ $item->name }}</a></td>
                    <td>{{ $item->number_of_berths }}</td>
                    <td>{{ $item->location }}</td>
                    <td class="hidden md:table-cell">
                        <a href="mailto:{{ $item->email }}" target="_blank">
                            <i class="fas fa-at"></i>
                            {{ $item->contact }}
                        </a>
                    </td>
                    <td>
                        <a href="tel:{{ $item->fon }}" target="_blank">
                            <i class="fas fa-phone"></i>
                            <span>{{ $item->fon }}</span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $data->links() }}
    </div>
@endsection

@push('inline-scripts')
    <script>
    </script>
@endpush
