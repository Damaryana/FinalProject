<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();

        return view('admin.team', compact('team'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'nim' => 'required|string',
            'role' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $imgName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('team-image'), $imgName);

        $team = Team::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'role' => $request->role,
            'image' => $imgName
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Ditambakan');
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
        $team = Team::find($id);
        $team->name = $request->name;
        $team->nim = $request->nim;
        $team->role = $request->role;
        if($request->hasFile('image')){
            $imgName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('team-image'), $imgName);

            $team->image = $imgName;
        }
        $team->save();

        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $team = Team::find($id)->delete();
        
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
