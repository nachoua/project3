<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bd_bank;
use App\Models\bd_human;

class bank_human extends Controller
{
    //
    public function show($id)
    {
        $data_bank=bd_bank::find($id)->get();

        $data_human=bd_human::find($id)->get();
        // dd($data_bank->human());
        //    dd($data_human);
        return view('onetoone', ['data_human'=> $data_human, 'data_bank'=> $data_bank]);

    }
    public function show_bank_human()
    {
        $bd_human = bd_human::all();
        return view('onetone_store2', ['bd_human'=> $bd_human]);
    }
    public function storehuman(Request $request)
    {
        $bd_human = new bd_human();
        $bd_human->first_name = request('first_name');
        $bd_human->last_name = request('last_name');
        $bd_human->adresse_resi = request('adresse_resi');
        $bd_human->adresse_bird = request('adresse_bird');
        $bd_human->birthday = request('birthday');
        $bd_human->save();

        return '<script>alert("success oppertaion store1 human");</script>';

    }
    public function storebank(Request $request, $id)
    {
        $bd_human = bd_human::find($id);
        $bd_bank = new bd_bank();
        $bd_bank->human_id = request('human_id');
        $bd_bank->num_compte = request('num_compte');
        $bd_bank->num_cin = request('num_cin');
        $bd_human->bank()->save($bd_bank);
        return '<script>alert("I would to say congratulation for success oppertaion store2 bank");</script>';

    }
}
