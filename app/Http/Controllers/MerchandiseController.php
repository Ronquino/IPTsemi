<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchandises;

class MerchandiseController extends Controller
{
    public function index(){
        $merchandise = Merchandises::orderByRaw('name, description')->limit(100)->get();
        return view('merchandises.index', ['merchandises' => $merchandise]);
    }
    public function create(){
        return view('merchandises.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        Merchandises::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'quantity' => $request['quantity'],
            'price' => $request['price']

        ]);

        return redirect('/merchandises')->with('info', 'New merchandises has been added.');
    }
}
