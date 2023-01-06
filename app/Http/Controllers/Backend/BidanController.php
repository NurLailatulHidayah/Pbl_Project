<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bidan;
use App\Models\Posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BidanController extends Controller
{
    public function BidanView(){
        // $allDataUser=User::all();
        $data['allDataBidan']=Bidan::all();
        return view('backend.bidan.view_bidan',$data);
    }

    public function BidanAdd(){
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        
        // $dataPosyandu = DB::table('posyandus')
        // ->whereIn('id', function ($query) {
        //     $query->select('posyandu_id')->from('bidans');
        // })
        // ->get();
        $dataPosyandu = Posyandu::all();
        return view('backend.bidan.add_bidan',compact('dataPosyandu'));
    }

    public function BidanStore(Request $request){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=new Bidan();
        $data->nama=$request->nama;
        $data->nip=$request->nip;
        $data->posyandu_id=$request->posyandu_id;
        $data->alamat=$request->alamat;
        $data->save();

        return redirect()->route('bidan.view')->with('info','Tambah user berhasil');
    }

    public function BidanEdit($id){
        $editData= Bidan::find($id);
        return view('backend.bidan.edit_bidan', compact('editData'));
    }

    public function BidanUpdate(Request $request, $id){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=Bidan::find($id);
        $data->nama=$request->nama;
        $data->nip=$request->nip;
        $data->posyandu_id=$request->posyandu_id;
        $data->alamat=$request->alamat;
        $data->save();

        return redirect()->route('bidan.view')->with('info','Update user berhasil');
    }

    public function BidanDelete($id){
        $deleteData= Bidan::find($id);
        $deleteData->delete();


        return redirect()->route('bidan.view')->with('info','Delete user berhasil');
    }
}
