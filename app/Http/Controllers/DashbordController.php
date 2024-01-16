<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $data=Client::orderBy('created_at', 'desc')->paginate(7);
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
        return redirect()->route('Dashbord');
    }
    
}
