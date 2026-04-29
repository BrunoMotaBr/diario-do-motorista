<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use App\Models\Ride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rides = Ride::with('platform')
        ->where('user_id', Auth::id())
        ->latest()
        ->get();

        return view(
            'rides.index',
            compact('rides')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $platforms = Platform::all();

        return view(
            'rides.create',
            compact('platforms')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'platform_id'=>'required',
            'valor'=>'required',
            'data_corrida'=>'required',
            'quantidade_km'=>'nullable',
            'tempo_online_minutos'=>'nullable',
            'observacoes'=>'nullable'
        ]);

        $data['user_id'] = Auth::id();

        Ride::create($data);

        return redirect()
        ->route('corridas.index')
        ->with('success','Registro cadastrada');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
