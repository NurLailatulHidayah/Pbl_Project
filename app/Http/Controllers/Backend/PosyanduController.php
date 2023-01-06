<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    public function PosyanduView(){
        // $allDataUser=User::all();
        $data['allDataPosyandu']=Posyandu::all();
        return view('backend.posyandu.view_posyandu',$data);
    }

    public function PosyanduAdd(){
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        return view('backend.posyandu.add_posyandu');
    }

    public function PosyanduStore(Request $request){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=new Posyandu();
        $data->nama=$request->nama;
        $data->nama_posyandu=$request->nama_posyandu;
        $data->alamat=$request->alamat;
        $data->jadwal=$request->jadwal;
        $data->save();

        return redirect()->route('posyandu.view')->with('info','Tambah user berhasil');
    }

    public function PosyanduEdit($id){
        $editData= posyandu::find($id);
        return view('backend.posyandu.edit_posyandu', compact('editData'));
    }

    public function PosyanduUpdate(Request $request, $id){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=Posyandu::find($id);
        $data->nama=$request->nama;
        $data->nama_posyandu=$request->nama_posyandu;
        $data->alamat=$request->alamat;
        $data->jadwal=$request->jadwal;
        $data->save();

        return redirect()->route('posyandu.view')->with('info','Update user berhasil');
    }

    public function PosyanduDelete($id){
        $deleteData= Posyandu::find($id);
        $deleteData->delete();


        return redirect()->route('posyandu.view')->with('info','Delete user berhasil');
    }
}
