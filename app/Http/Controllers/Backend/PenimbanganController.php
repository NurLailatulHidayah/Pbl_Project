<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bayi;
use App\Models\Penimbangan;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class PenimbanganController extends Controller
{
    public function PenimbanganView(){
        // $allDataUser=User::all();
        $data['allDataPenimbangan']=Penimbangan::all();
        return view('backend.penimbangan.view_penimbangan',$data);
    }

    public function PenimbanganAdd(){
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        $dataBayi = Bayi::all();
        $dataPosyandu = Posyandu::all();
        return view('backend.penimbangan.add_penimbangan',compact('dataPosyandu','dataBayi'));
    }

    public function PenimbanganStore(Request $request){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=new Penimbangan();
        $data->bayi_id=$request->bayi_id;
		$data->posyandu_id=$request->posyandu_id;
		$data->tinggi_badan=$request->tinggi_badan;
		$data->berat_badan=$request->berat_badan;
		$data->posisi=$request->posisi;
		$data->umur=$request->umur;
		$data->tanggal_pemeriksaan=$request->tanggal_pemeriksaan;
        $data->save();

        return redirect()->route('penimbangan.view')->with('info','Tambah user berhasil');
    }

    public function PenimbanganEdit($id){
        $editData= Penimbangan::find($id);
        return view('backend.penimbangan.edit_penimbangan', compact('editData'));
    }

    public function PenimbanganUpdate(Request $request, $id){
        //dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $data=Penimbangan::find($id);
        $data->bayi_id=$request->bayi_id;
		$data->posyandu_id=$request->posyandu_id;
		$data->tinggi_badan=$request->tinggi_badan;
		$data->berat_badan=$request->berat_badan;
		$data->posisi=$request->posisi;
		$data->umur=$request->umur;
		$data->tanggal_pemeriksaan=$request->tanggal_pemeriksaan;
        $data->save();

        return redirect()->route('penimbangan.view')->with('info','Update user berhasil');
    }

    public function PenimbanganDelete($id){
        $deleteData= Penimbangan::find($id);
        $deleteData->delete();


        return redirect()->route('penimbangan.view')->with('info','Delete user berhasil');
    }
}