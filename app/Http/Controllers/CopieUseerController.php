<?php

namespace App\Http\Controllers;
use App\Models\Copie; 
use App\Models\Useer; 
use Illuminate\Http\Request;
class CopieUseerController extends Controller
{
    public function asociar()
    {
        $copies = Copie::all();
        $useers = Useer::all();

        return view('copie_useer.asociar', compact('copies', 'useers'));
    }

    public function store(Request $request)
    {
        $copie = Copie::find($request->copie_id);
        $copie->useer()->attach($request->useer_id);
        return 'Hola desde asociar';
    }
}