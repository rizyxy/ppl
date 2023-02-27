<?php
namespace App\Http\Controllers;

use App\Models\ProfilLulusan;
use App\Http\Requests\StoreProfilLulusanRequest;
use App\Http\Requests\UpdateProfilLulusanRequest;
use Illuminate\Http\Request;

class ProfilLulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('creation.profil_lulusan', [
            'title' => "Profil Lulusan",
            'pls' => ProfilLulusan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfilLulusanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'kode_pl' => 'required',
            'profil_lulusan' => 'required'
        ]);

        $data = $request->all();
        ProfilLulusan::create([
            'kode_pl' => $data['kode_pl'],
            'profil_lulusan' => $data['profil_lulusan']
        ]);

        return redirect('/admin/profil_lulusan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfilLulusan  $profilLulusan
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilLulusan $profilLulusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfilLulusan  $profilLulusan
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilLulusan $profilLulusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilLulusanRequest  $request
     * @param  \App\Models\ProfilLulusan  $profilLulusan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfilLulusanRequest $request, ProfilLulusan $profilLulusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfilLulusan  $profilLulusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilLulusan $profilLulusan)
    {
        ProfilLulusan::where('kode_pl', '=', $profilLulusan->kode_pl)->delete();

        return redirect('admin/profil_lulusan');
    }
}
