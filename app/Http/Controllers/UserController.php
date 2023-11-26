<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Biens;
use Illuminate\Http\Request;
use App\Policies\BiensPolicy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
        $user->mot_de_passe=($request->mot_de_passe);
        $user->role='user';

        if ($user->save()) {
            return redirect('/connexion');

        }
    }
    //
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

     public function connexion(){
         return view('connexion');
     }

     public function connecter(Request $request){
      $connexion =  $request->validate([
            'email'=>'required|email',
            'mot_de_passe'=>'required'
        ]);

        $mdp = bcrypt($connexion['mot_de_passe']);

        $last = '$2y$12$MoyAz6kXxk9xbUBgWFv/5eeHvvmFW4cfWJfNWhM3uVwe8OTk3alYC';

        //dd($mdp === $last);


        $credentials = $request->only('email', 'mot_de_passe');
        dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials)) {
            // L'authentification a réussi
            return redirect('/pageUser');
        } else {
            // L'authentification a échoué

            return back()->withErrors(['message' => 'Adresse e-mail ou mot de passe incorrect']);
        }


     }

}
