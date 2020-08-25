@extends('layout')

@section('content')
    <h2>{{count($kuras)}} items</h2>

    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th scope="col">Founded in</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th scope="col">Phone</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th scope="col">Address</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th scope="col">URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kuras as $kura)
            <tr>
                <th scope="row">
                @if(isset($kura->name_kana) && strlen($kura->name_kana) > 0)
                    <ruby><rb>{{ $kura->name }}</rb><rp>（</rp><rt>{{ $kura->name_kana }}</rt><rp>）</rp></ruby>
                @else
                    {{ $kura->name }}
                @endif
                </th>
                <td></td>
                <td>{{ $kura->founded_in }}</td>
                <td></td>
                <td>{{ $kura->phone }}</td>
                <td></td>
                <td>{{ $kura->address }}</td>
                <td></td>
                <td>
                @if(isset($kura->url) && strlen($kura->url) > 0)
                    <a href="{{ $kura->url }}" target="_blank">{{ $kura->url }}</a>
                @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $kuras->links() }}
    </div>
@endsection
