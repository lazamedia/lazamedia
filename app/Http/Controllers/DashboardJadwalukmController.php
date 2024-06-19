<?php

namespace App\Http\Controllers;

use App\Models\Jadwalukm;
use Illuminate\Http\Request;

class DashboardJadwalukmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.jadwalukm.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jadwalukm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'bulan' => 'required',
            'name' => 'required',
            
            'anggota' => 'required'
            
        ]);

      

        
       
        

        Jadwalukm::create($validatedData);

        return redirect('/dashboard/jadwalukm')->with('success', 'Berhasil Menambahkan Postingan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwalukm $jadwalukm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwalukm $jadwalukm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwalukm $jadwalukm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwalukm $jadwalukm)
    {
        //
    }
}
