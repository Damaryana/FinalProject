<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\App;
use App\Models\Team;
use App\Models\Logo;

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
        $about = About::select('about_us')->latest('created_at')->first();
        $logo = Logo::select('logo')->latest('created_at')->first();

        return response()->json([
            'html' => view('website.aboutManual', compact('about', 'logo'))->render()
        ]);
    }

    public function teamManual(){
        $team = Team::all();

        return response()->json([
            'html' => view('website.teamManual', compact('team'))->render()
        ]);
    }

    public function createWebsite(Request $request){
        return view('admin.website');
    }

    public function storeAbout(Request $request)
    {
        $validated = $request->validate([
            'about' => 'required|string'
        ]);

        $about = About::create([
            'about_us' => $request->about,
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function storeLogo(Request $request){
        $validated = $request->validate([
            'logo' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $logoName = time().$request->logo->getClientOriginalName();
        $request->logo->move(public_path('web-images'), $logoName);

        $logo = Logo::create([
            'logo' => $logoName,
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
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
