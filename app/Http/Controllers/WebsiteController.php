<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use App\Models\Team;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('layouts.website');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function listManual()
    {
        $app = App::select('name', 'id')->orderBy('name')->get();

        return response()->json([
            'html' => view('website.listManual', compact('app'))->render()
        ]);
    }

    public function aboutManual()
    {
        return response()->json([
            'html' => view('website.aboutManual')->render()
        ]);
    }

    public function teamManual(){
        $team = Team::all();

        return response()->json([
            'html' => view('website.teamManual', compact('team'))->render()
        ]);
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
