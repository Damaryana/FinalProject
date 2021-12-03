<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\SubPart;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $subPart = SubPart::find($request->id);
            if($subPart->item->count() > 0){
                $section = "";
                foreach($subPart->item as $i){
                    $section .= $i->section;
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

    public function searchPart(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'value' => 'regex:/(^([a-zA-z\s]+)(\d+)?$)/u'
        ]);

        if ($validator->passes()) {
            $val = $request->value;
            $result = "";

            $getData = SubPart::where('name', 'LIKE', "%{$val}%")->select('id', 'name', 'part_id')->with('subPart:id,name')->take(5)->get();

            foreach($getData as $key => $d){
                $result .= "<div data-value=".$d->id."><span>".$d->subPart->name."</span><span>".$d->name."</span></div>";
            }
            return $result;
        }

        return response()->json(['error'=>$validator->errors()->all()]);
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
