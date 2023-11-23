<?php

namespace App\Http\Controllers;

use App\Models\Biens;
use App\Http\Requests\StorebiensRequest;
use App\Http\Requests\UpdatebiensRequest;
use Illuminate\Http\Request;



class BiensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajoutBien');
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $req)
        {
            $biens= new Biens();
            $req->validate([
                'nomBien'=>'required|min:2|max:20 ',
                'categorie'=>'required |min:2|max:20',
                'image'=>'required',
                'description'=>'required ',
                'adresse'=>'required',
                'statut'=>'required',
                'date'=>'required',


            ]);
            $biens->nomBien=$req->nomBien;
            $biens->categorie=$req->categorie;
            $biens->image=$req->image;
            $biens->description=$req->description;
            $biens->adresse=$req->adresse;
            $biens->statu=$req->statut;
            $biens->date=$req->date;
            if ($biens->save()) {
                return redirect('/pageAdmin');
            }

        }

    /**
     * Display the specified resource.
     */
    public function show(biens $biens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(biens $biens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebiensRequest $request, biens $biens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(biens $biens)
    {
        //
    }
}
