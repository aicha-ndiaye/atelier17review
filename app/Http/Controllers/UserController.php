<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Biens;
use Illuminate\Http\Request;
use App\Policies\BiensPolicy;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Biens=Biens::all();
        return view ('pageUser',compact('Biens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inscription');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user= new User();
        $request->validate([
            'nom' => 'required|min:2|max:20',
            'prenom' => 'required|min:2|max:20',
            'email' => 'required|email',
            'mot_de_passe' => [
                'required',
                'regex:/^(?=.*[A-Z])(?=.*\d).{2,}$/',
            ],
        ]);

        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $user->mot_de_passe=$request->mot_de_passe;
        $user->role='user';

        if ($user->save()) {
            return redirect('/pageUser');
        }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
