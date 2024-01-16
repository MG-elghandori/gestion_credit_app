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
}
