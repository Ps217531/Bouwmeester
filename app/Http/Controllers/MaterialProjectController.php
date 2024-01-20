<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialProjectController extends Controller
{
    //attach material to project

    public function attachMaterialToProject(Request $request)
    {
        $material = Material::find($request->material_id);
        $material->projects()->attach($request->project_id, ['quantity_used' => $request->quantity_used]);
        return redirect()->route('materials.index')->with('success', 'Material attached to project successfully.');
    }
}
