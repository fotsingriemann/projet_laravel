<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\VisiteTechnique;
use Illuminate\Http\Request;

class VisiteTechniqueApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $visite_techniques = VisiteTechnique::latest()->paginate(25);

        return $visite_techniques;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $visite_technique = VisiteTechnique::create($request->all());

        return response()->json($visite_technique, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visite_technique = VisiteTechnique::findOrFail($id);

        return $visite_technique;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $visite_technique = VisiteTechnique::findOrFail($id);
        $visite_technique->update($request->all());

        return response()->json($visite_technique, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VisiteTechnique::destroy($id);

        return response()->json(null, 204);
    }
}
