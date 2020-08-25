@extends('layout')

@section('content')
    <h2>{{count($sake_items)}} items</h2>

    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th scope="col">Image</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th scope="col">Alcohol content</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th scope="col">Polished-rice ratio</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th scope="col">Kura</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sake_items as $sake_item)
            <tr>
                <th scope="row">
                    <ruby><rb>{{ $sake_item->name }}</rb><rp>（</rp><rt>{{ $sake_item->name_kana }}</rt><rp>）</rp></ruby>
                </th>
                <td></td>
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
