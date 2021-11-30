<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\SubPart;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $subPart = SubPart::find($request->id);
            if($subPart->item->count() > 0){
                foreach($subPart->item as $i){
                    $section = $i->section;
                }
                $instruction = "<li><div class='title-instruction mb-2'>".$subPart->name."</div>".$section."</li>";
            }else{
                $instruction = "<li><div class='title-instruction mb-2'>".$subPart->name."</div>Data Kosong</li>";
            }
        }

        return $instruction;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $part = App::find($id);

        return view('layouts.master', compact('part'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
