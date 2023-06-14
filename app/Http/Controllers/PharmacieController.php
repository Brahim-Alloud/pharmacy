<?php

namespace App\Http\Controllers;

use App\Models\Pharmacie;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pharmacies=Pharmacie::all();
        return view('pharmacie.index',compact('pharmacies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pharmacie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nom'=>'required',
            'adresse'=>'required',
            'email'=>'required',
            'ville'=>'required',
            'file-upload'=>'nullable',
            'telephone'=>'required',
            'heure_matin_ts_debut'=>'required',
            'heure_matin_ts_fin'=>'required',
            'heure_soir_ts_debut'=>'required',
            'heure_soir_ts_fin'=>'required',
            'heure_soir_fs_debut'=>'required',
            'heure_soir_fs_fin'=>'required',
            'semaine_travail_fs'=>'required',
            'geo_lat'=>'nullable',
            'geo_long'=>'nullable',
        ]);
        if ($request->hasFile('file-upload')) {
            $file = $request->file('file-upload');
            $filename = $file->getClientOriginalName();
            $fileName = date('His') . $filename;
            $request->file('file-upload')->storeAs('images/pharmacies/', $fileName, 'public');
            $request['photo_chemain'] = $fileName;
            Pharmacie::create($request->all());
            return redirect()->route('pharmacie.index');
        } else {
            Pharmacie::create($request->all());
            return redirect()->route('pharmacie.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $pharmacie=Pharmacie::find($id);
        return view('pharmacie.show',compact('pharmacie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pharmacie=Pharmacie::findorfail($id);
        return view('pharmacie.edit',compact('pharmacie'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // dd($request);
        $request->validate([
            'nom'=>'required',
            'adresse'=>'required',
            'email'=>'required',
            'ville'=>'required',
            'file-upload'=>'nullable',
            'heure_matin_ts_debut'=>'nullable',
            'heure_matin_ts_fin'=>'nullable',
            'heure_nuit_ts_debut'=>'nullable',
            'heure_nuit_ts_fin'=>'nullable',
            'heure_matin_fs_debut'=>'nullable',
            'heure_matin_fs_fin'=>'nullable',
            'heure_nuit_fs_debut'=>'nullable',
            'heure_nuit_fs_fin'=>'nullable',
            'semaine_travail_fs'=>'nullable',
            'geo_lat'=>'nullable',
            'geo_long'=>'nullable',

        ]);
        $pharmacie=Pharmacie::findorfail($id);
        $pharmacie->update($request->all());
        return redirect()->route('pharmacie.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pharmacie=Pharmacie::findorfail($id);
        $pharmacie->delete();
        return redirect()->route('pharmacie.index');
    }
}
