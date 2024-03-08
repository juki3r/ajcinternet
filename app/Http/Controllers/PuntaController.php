<?php

namespace App\Http\Controllers;

use App\Models\Punta;
use App\Models\PuntaBill;
use Illuminate\Http\Request;

class PuntaController extends Controller
{
    public function punta ()
    {   
        $puntadata = Punta::get();
        return view('include.punta', ['puntadata' => $puntadata]);
        
    }
    //Add Punta Client
    public function addpuntaclient ()
    {   
        return view('include.puntaaddclient');
    }
    //Proceed add client
    public function addpuntaclientproceed (Request $request)
    {   
        $request->validate([
            'fullname' => 'required|unique:puntas',
            'contact' => 'required|min:11|unique:puntas',
            'plan' => 'required|min:3',
            'duedate' => 'required|min:1|max:2'
        ]);
        $confirmadd = Punta::create([
            'fullname' => $request->fullname,
            'contact' => $request->contact,
            'plan' => $request->plan,
            'duedate' => $request->duedate
        ]);
            if(!$confirmadd ){
                return redirect()->back()->with('status', 'Fail to add !');
            }
        return redirect()->back()->with('status', 'Client Added !');
    }

    //Delete Client
    public function deletepuntaclient ($id)
    {
        $search = $id;
        $client = Punta::where('id', 'like', "%$search%");
        $client->delete();
        return redirect()->back()->with('status', 'Client Deleted');
    }

    // Billing

    public function clientbill (int $id)
    {
        $clientbill = Punta::findOrFail($id);
        return view('include.clientbill', compact('clientbill'));
    }
}
