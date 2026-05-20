<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all(); #select * from clients
        return view('index' , compact('clients'));
    }

    public function ajouter(){
        return view('ajouter');
    }

    public function store(Request $request){
       // dd($request);
        Client::create([
            'nom'=> $request->nom,
            'prenom' =>  $request->prenom,
            'email' => $request->email,
            'adresse' => $request->adresse
        ]);

        return redirect('/');
    }

    public function delete($id){
        $client = Client::find($id);
        $client->delete();
        
        return redirect('/');
    }
}
