<?php

namespace App\Http\Controllers;

use App\Models\ashyifa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class sipa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=ashyifa::all();
        return view('isian.tampildata')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.uas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'Nama_Pasukan'=> 'required',
            'Email'=> 'required',
            'Asal_Sekolah'=> 'required',
            'Asal_Daerah'=> 'required',
            'Nama_Pelatih'=> 'required'
        ]);
        $data=[
            'Nama_Pasukan'=> $request->input('Nama_Pasukan'),
            'Email'=> $request->input('Email'),
            'Asal_Sekolah'=> $request->input('Asal_Sekolah'),
            'Asal_Daerah'=> $request->input('Asal_Daerah'),
            'Nama_Pelatih'=> $request->input('Nama_Pelatih')
        ];
        ashyifa::create($data);
        return redirect('isian');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ashyifa::where('Nama_Pasukan',$id)->first();
        return view('isian.edit')->with('data',$data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Nama_Pasukan'=>'required',
            'Email'=>'required',
            'Asal_Sekolah'=>'required',
            'Asal_Daerah'=>'required',
            'Nama_Pelatih'=>'required',
        ]);
        $data=[
            'Nama_Pasukan'=> $request->input('Nama_Pasukan'),
            'Email'=> $request->input('Email'),
            'Asal_Sekolah'=> $request->input('Asal_Sekolah'),
            'Asal_Daerah'=> $request->input('Asal_Daerah'),
            'Nama_Pelatih'=> $request->input('Nama_Pelatih'),
        ];
        ashyifa::where('Nama_Pelatih',$id)->update($data);
        return redirect('isian')->with('Data Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ashyifa::where('Nama_Pasukan',$id)->delete();
        return redirect('isian')->with('Data Berhasil Dihapus.');
    }
}
