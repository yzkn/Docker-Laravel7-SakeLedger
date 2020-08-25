<?php

namespace App\Http\Controllers;

use App\SakeItem;

class SakeItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sake_items = SakeItem::with(['brand.kura', 'sake_item_images'])->get()->sortByDesc("id");
        return view('sake_item.index', compact('sake_items'));
    }
}
