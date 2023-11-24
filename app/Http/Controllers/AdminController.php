<?php

namespace App\Http\Controllers;

use App\Models\Biens;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  //cette fonction c'est pour lister bien dans la page admin
    {
        $Biens=Biens::all();
        return view ('pageAdmin',compact('Biens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function voirplus($id ){
        $bien=Biens::FindOrFail($id);
        return view('voirplus',compact('bien'));


    }

    public function edit($id)
    {
        $bien=Biens::FindOrFail($id);
        return view('modifsuppbien',compact('bien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biens $bien)  //cette fonction pour le bouton modifier il doit recuperer tt et valider
    {

            $request->validate([
                'nomBien'=>'required|min:2|max:20 ',
                'categorie'=>'required |min:2|max:20',
                'image'=>'required',
                'description'=>'required ',
                'adresse'=>'required',
                'statu'=>'required',
                'date'=>'required',


            ]);
            $bien->nomBien=$request->nomBien;
            $bien->categorie=$request->categorie;
            $bien->image=$request->image;
            $bien->description=$request->description;
            $bien->adresse=$request->adresse;
            $bien->statu=$request->statu;
            $bien->date=$request->date;
            if ($bien->save()) {
                return redirect('/pageAdmin');
            }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $req)
        {
           $bien= Biens::FindOrFail($req->id);
           if($bien->delete()) {
            return back() ;

          }
        }

}
