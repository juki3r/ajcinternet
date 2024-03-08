<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuyoPoblacion;

class LuyoPoblacionController extends Controller
{
    public function luyo ()
    {   
        $data = LuyoPoblacion::get();
        return view('include.luyopoblacion', ['data' => $data]);
        
    }
    //Add  Client
    public function AddClient ()
    {   
        return view('include.luyoaddclient');
    }
    //Proceed add client
    public function AddClientProceed (Request $request)
    {   
        $request->validate([
            'fullname' => 'required|unique:luyo_poblacions',
            'contact' => 'nullable',
            'plan' => 'required|min:3',
            'duedate' => 'required|min:1|max:2'
        ]);
        $confirmadd = LuyoPoblacion::create([
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
    public function deleteclient ($id)
    {
        $search = $id;
        $client = LuyoPoblacion::where('id', 'like', "%$search%");
        $client->delete();
        return redirect()->back()->with('status', 'Client Deleted');
    }

    

    // edit  Client
    public function Editclient (int $id)
    {
        $data = LuyoPoblacion::findOrFail($id);
        return view('include.editluyoclient', compact('data'));
    }
    //Update Client
    public function updateclient (Request $request, int $id)
    {
        $request->validate([
            'fullname' => 'unique:luyo_poblacions',
            'contact' => 'nullable',
            'plan' => 'min:3',
            'duedate' => 'min:1|max:2'
        ]);
        LuyoPoblacion::findOrFail($id)->update([
            'fullname' => $request->fullname,
            'contact' => $request->contact,
            'plan' => $request->plan,
            'duedate' => $request->duedate
        ]);
        return redirect()->back()->with('status', 'Client Updated');
    }

    // View bill
    // Billing

    public function clientbill (int $id)
    {
        $clientbill = LuyoPoblacion::findOrFail($id);
        return view('include.clientbillluyo', compact('clientbill'));
    }
    public function EditBillClient (int $id)
    {
        $clientbilledit = LuyoPoblacion::findOrFail($id);
        return view('include.clientbilleditluyo', compact('clientbilledit'));
    }
    public function updatebill (Request $request, int $id)
    {
        LuyoPoblacion::findOrFail($id)->update([
            'january' => $request->january,
            'febuary' => $request->febuary,
            'march' => $request->march,
            'april' => $request->april,
            'may' => $request->may,
            'june' => $request->june,
            'july' => $request->july,
            'august' => $request->august,
            'september' => $request->september,
            'october' => $request->october,
            'november' => $request->november,
            'december' => $request->december,
        ]);
        return redirect()->back()->with('status', 'Client Bill Updated');
        
       
    }
}
