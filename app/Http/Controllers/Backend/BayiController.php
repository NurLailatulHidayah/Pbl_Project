<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bayi;
use App\Models\Posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BayiController extends Controller
{
    public function BayiView(){
        // $allDataUser=User::all();
        $data['allDataBayi']=Bayi::all();
        return view('backend.bayi.view_bayi',$data);
    }

    public function BayiAdd(){
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        // $dataPosyandu = DB::table('posyandus')
        // ->whereIn('id', function ($query) {
        //     $query->select('posyandu_id')->from('bidans');
        // })
        // ->get();
        $dataPosyandu = Posyandu::all();
        return view('backend.bayi.add_bayi',compact('dataPosyandu'));
    }

    public function BayiStore(Request $request){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=new Bayi();
        $data->id=$request->id;
        $data->posyandu_id=$request->posyandu_id;
        $data->name_bayi=$request->name_bayi;
        $data->name_ibu=$request->name_ibu;
        $data->nik_ibu=$request->nik_ibu;
        $data->tgl_lahir=$request->tgl_lahir;
        $data->gender=$request->gender;
        $data->alamat=$request->alamat;
        $data->save();

        return redirect()->route('bayi.view')->with('info','Tambah user berhasil');
    }

    public function BayiEdit($id){
        $editData= Bayi::find($id);
        return view('backend.bayi.edit_bayi', compact('editData'));
    }

    public function BayiUpdate(Request $request, $id){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=Bayi::find($id);
        $data->id=$request->id;
        $data->posyandu_id=$request->posyandu_id;
        $data->name_bayi=$request->name_bayi;
        $data->name_ibu=$request->name_ibu;
        $data->nik_ibu=$request->nik_ibu;
        $data->tgl_lahir=$request->tgl_lahir;
        $data->gender=$request->gender;
        $data->alamat=$request->alamat;
        $data->save();

        return redirect()->route('bayi.view')->with('info','Update user berhasil');
    }

    public function BayiDelete($id){
        $deleteData= Bayi::find($id);
        $deleteData->delete();


        return redirect()->route('bayi.view')->with('info','Delete user berhasil');
    }
}
