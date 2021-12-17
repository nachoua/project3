<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bd_children;
use App\Models\bd_parent;
use Illuminate\Support\Facades\Redirect;

class parent_children extends Controller
{
    //
    public function show_pc($id)
    {


        $data_parent=bd_parent::find($id)->get();
        $data_pa_ch=bd_parent::find($id)->get();

        // dd($data_parent->children());
        // dump($data_parent->children());
        return view('onetomany_show_parent_children', ['data_parent'=> $data_parent, 'data_pa_ch'=> $data_pa_ch]);
    }
    public function store_children(Request $request)
    {
        $children= new bd_children();
        $children->first_name = request('first_name');
        $children->last_name = request('last_name');
        $children->gender = request('gender');
        $children->description = request('description');
        $children->birthday = Request('birthday');
        $children->save();
        return '<script>alert("success store children");</script>';

    }
    public function index()
    {
        $bd_children=bd_children::all();
        return view('onetomany_store_parent', ['bd_children'=> $bd_children]);
    }
    public function store_parent(Request $request, $id)
    {
        $children=bd_children::find($id);
        $parent=new bd_parent();
        $parent->children_id=request('children_id');
        $parent->mother_name=request('mother_name');
        $parent->father_name=request('father_name');
        $children->parent()->save($parent);
        return '<script>alert("success store parent");</script>';


    }
    public function destroy($id)
    {

        $data_parent=bd_parent::find($id);
        $data_pa_ch=bd_parent::find($id);

        $data_parent->delete();
        $data_pa_ch->delete();
        return '<script>alert("successful");</script>';
    }
    public function add_children()
    {
       return Redirect('storechildren');
    }
    public function add_parent()
    {
       return Redirect('index');
    }

    public function edit_c($id)
   {

    $data_parent=bd_parent::find($id);

       return view('edit_c', ['data_parent'=> $data_parent]);

   }

   public function update_c(Request $request, $id)
   {

    $update=bd_children::find($id);


    $update->first_name = request('first_name');
    $update->last_name = request('last_name');
    $update->gender = request('gender');
    $update->description = request('description');
    $update->birthday = Request('birthday');
    $update->save();


    return '<script>alert("successful update");</script>';


   }
   public function edit_p($id)
   {
//    dd($id);
     $data1=bd_parent::find($id);
     $data2=bd_children::all();
       return view('edit_p', ['data1'=> $data1, 'data2'=> $data2]);

   }
    public function update_p(Request $request, $id)
    {
        // $children=bd_children::find($id);
        // $update=new bd_parent();
        $update=bd_parent::find($id);
        $update->children_id=request('children_id');
        $update->mother_name=request('mother_name');
        $update->father_name=request('father_name');
        $update->save();
        return '<script>alert("success store parent");</script>';
    }
}
