<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Deleteclient;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $data=Client::orderBy('created_at', 'desc')->paginate(6);
        $total=Client::count();
        return view("Dashbord.Dashbord",compact('data','total'));
    }

    public function create(){
        return view("Dashbord.create");
    }
    public function register_user(Request $request){
        $validatedData = $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'nomProduit' => 'required',
            'quantite' => 'required|integer',
            'prix' => 'required|numeric',
            'prixAvance' => 'required|numeric',
        ]);
        Client::create($validatedData);
        return redirect()->route('Dashbord')->with("success", "L'ajoute a bien réussi!");
    }

      public function delete($id){
        Client::find($id)->delete();
        return redirect()->route('Dashbord')->with("success", "La suppression a bien réussi!");
    }

    public function corbeille()
    {
        $datadelete=Deleteclient::All();
        return view("Dashbord.clientsDelete",compact('datadelete'));
    }
}
