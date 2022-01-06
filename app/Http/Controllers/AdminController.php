<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use App\Models\Part;
use App\Models\SubPart;
use App\Models\Item;

class AdminController extends Controller
{
    public function indexApp()
    {
        $app = App::all();
        
        return view('inputApp', compact('app'));
    }

    public function indexPart($id)
    {
        $part = App::find($id);

        return view('inputPart', compact('part'));
    }

    public function indexSubPart($id)
    {
        $subPart = Part::find($id);

        return view('inputSubPart', compact('subPart'));
    }

    public function indexItem($id)
    {
        $item = SubPart::find($id);

        return view('inputItem', compact('item'));
    }

    public function storeApp(Request $r)
    {
        $validated = $r->validate([
            'name' => 'required',
            'version' => 'required'
        ]);
        
        $app = App::create([
            'name' => ucwords($r->name),
            'version' => $r->version
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }

    public function storePart(Request $r)
    {
        $validated = $r->validate([
            'name' => 'required'
        ]);

        $part = Part::create([
            'app_id' => $r->app_id,
            'name' => ucwords($r->name)
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }

    public function storeSubPart(Request $r)
    {
        $validated = $r->validate([
            'name' => 'required',
            'part_id' => 'required'
        ]);

        $subPart = SubPart::create([
            'name' => ucwords($r->name),
            'part_id' => $r->part_id
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function storeItem(Request $r)
    {
        $validated = $r->validate([
            'section' => 'required',
            'sub_part_id' => 'required'
        ]);

        $str = str_replace(";", ".<br>", $r->section);

        $item = Item::create([
            'section' => str_replace("'''","<br><br>",$str),
            'sub_part_id' => $r->sub_part_id
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroyApp($id)
    {
        $app = App::find($id)->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }

    public function destroyPart($id)
    {
        $app = Part::find($id)->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }

    public function destroySubPart($id)
    {
        $app = SubPart::find($id)->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }

    public function destroyItem($id)
    {
        $app = Item::find($id)->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }
}
