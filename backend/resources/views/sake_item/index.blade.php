@extends('layout')

@section('content')
    <h2>{{count($sake_items)}} items</h2>

    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Name</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Alcohol content</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Polished-rice ratio</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Kura</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sake_items as $sake_item)
            <tr>
                <td>
                    <ul>
                        @foreach ($sake_item->sake_item_images as $image)
                            <li>
                                <img src="/storage/{{ $image->path }}" class="img-thumbnail" />
                            </li>
                        @endforeach
                    </ul>
                </td>
                <td></td>
                <td><ruby><rb>{{ $sake_item->name }}</rb><rp>（</rp><rt>{{ $sake_item->name_kana }}</rt><rp>）</rp></ruby> </td>
                <td></td>
                <td>{{ $sake_item->alcohol_content }}</td>
                <td></td>
                <td>{{ $sake_item->polished_rice_ratio }}</td>
                <td></td>
                <td>{{ $sake_item->brand->kura ? $sake_item->brand->kura->name : '' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
