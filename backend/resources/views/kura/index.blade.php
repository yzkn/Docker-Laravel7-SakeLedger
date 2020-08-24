@extends('layout')

@section('content')
    <h2>{{count($kuras)}} items</h2>

    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Founded in</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Phone</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Address</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kuras as $kura)
            <tr>
                <td>
                @if(isset($kura->name_kana) && strlen($kura->name_kana) > 0)
                    <ruby><rb>{{ $kura->name }}</rb><rp>（</rp><rt>{{ $kura->name_kana }}</rt><rp>）</rp></ruby>
                @else
                    {{ $kura->name }}
                @endif
                </td>
                <td></td>
                <td>{{ $kura->founded_in }}</td>
                <td></td>
                <td>{{ $kura->phone }}</td>
                <td></td>
                <td>{{ $kura->address }}</td>
                <td></td>
                <td>{{ $kura->url }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
