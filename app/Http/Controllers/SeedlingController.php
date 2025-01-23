<?php

namespace App\Http\Controllers;

use App\Models\Seedling;
use App\Http\Requests\StoreSeedlingRequest;
use App\Http\Requests\UpdateSeedlingRequest;

class SeedlingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seeds = Seedling::all();

        return view("seeds.index", ["seeds" => $seeds]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seeds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSeedlingRequest $request)
    {
        Seedling::create($request->all());

        return back()->with("success", "Fel van töltve");
    }

    /**
     * Display the specified resource.
     */
    public function show(Seedling $seedling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seedling $seedling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeedlingRequest $request, Seedling $seedling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seedling $seedling)
    {
        //
    }
}
