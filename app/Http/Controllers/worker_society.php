<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bd_worker;
use App\Models\bd_society;


class worker_society extends Controller
{
    //
    public function show_sw($id)
    {
        $data_society=bd_society::find($id)->get();
        $data_worker=bd_worker::find($id)->get();
        // dd($data_society->worker());
        return view('onetomany2', ['data_society'=> $data_society, 'data_worker'=> $data_worker]);
    }

    public function store1(Request $request)
    {


        $store = new bd_worker();
        $store->full_name = request('full_name');
        $store->picture = request('picture');
        $store->adresse = request('adresse');
        $store->departement = request('departement');
        $store->date_birthday = request('date_birthday');
        $store->date_joined = request('date_joined');
        $store->save();



        return '<script type=""text/javascript>alert("operation successfull store 1");</script>';

    }
    public function show_all()
    {
        $bd_worker=bd_worker::all();
        // $bd=bd_worker::where('id', $id);

        return view('onetomany_store2', ['bd_worker'=> $bd_worker]);

    }
    public function store2(Request $request, $id)
    {
        $data_worker=bd_worker::find($id);

        $store_society = new bd_society();
        $store_society->worker_id = request('worker_id');
        $store_society->name_society = request('name_society');
        $store_society->adresse_society = request('adresse_society');
        $store_society->date_buillding = request('date_buillding');

        $data_worker->society()->save($store_society);





        return '<script type=""text/javascript>alert("operation successfull store2 ");</script>';

    }
}
