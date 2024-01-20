<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $materials = Material::with('projects')->get();

      return view('materials.index', [
        'materials' => $materials,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //projects if want to show in create form
        //$projects = Project::all();
        return view('materials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMaterialRequest $request)
    {
        $validated = $request->validated();
        
       
    

        try {
      $material = Material::create([
            'name' => $request->name,
            'avaibility' => $request->avaibility,
            'location' => $request->location,
            'cost_per_unit' => $request->cost_per_unit,
        ]);


        
        return redirect()->route('materials.index')->with('success', 'Material created successfully.'); 
    } catch (\Exception $e) {
        return redirect()->route('materials.index')->with('error', 'Something went wrong.');

    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMaterialRequest $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        //
    }
}
