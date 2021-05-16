<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Engindoc;
use Illuminate\Http\Request;

class EngindocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $engindoc = Engindoc::where('visite_technique', 'LIKE', "%$keyword%")
                ->orWhere('engin', 'LIKE', "%$keyword%")
                ->orWhere('immatriculation', 'LIKE', "%$keyword%")
                ->orWhere('date_debut_val', 'LIKE', "%$keyword%")
                ->orWhere('date_fin_val', 'LIKE', "%$keyword%")
                ->orWhere('effectuer_par', 'LIKE', "%$keyword%")
                ->orWhere('piece_jointe', 'LIKE', "%$keyword%")
                ->orWhere('engin_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $engindoc = Engindoc::latest()->paginate($perPage);
        }

        return view('admin.engindoc.index', compact('engindoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.engindoc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'visite_technique' => 'required',
			'date_debut_val' => 'required',
			'date_fin_val' => 'required',
			'effectuer_par' => 'required',
			'engin' => 'required',
			'immatriculation' => 'required',
			'engin_id' => 'required|exists:engins,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('visite_technique')) {
            $requestData['visite_technique'] = $request->file('visite_technique')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('piece_jointe')) {
            $requestData['piece_jointe'] = $request->file('piece_jointe')
                ->store('uploads', 'public');
        }

        Engindoc::create($requestData);

        return redirect('admin/engindoc')->with('flash_message', 'Engindoc added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $engindoc = Engindoc::findOrFail($id);

        return view('admin.engindoc.show', compact('engindoc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $engindoc = Engindoc::findOrFail($id);

        return view('admin.engindoc.edit', compact('engindoc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'visite_technique' => 'required',
			'date_debut_val' => 'required',
			'date_fin_val' => 'required',
			'effectuer_par' => 'required',
			'engin' => 'required',
			'immatriculation' => 'required',
			'engin_id' => 'required|exists:engins,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('visite_technique')) {
            $requestData['visite_technique'] = $request->file('visite_technique')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('piece_jointe')) {
            $requestData['piece_jointe'] = $request->file('piece_jointe')
                ->store('uploads', 'public');
        }

        $engindoc = Engindoc::findOrFail($id);
        $engindoc->update($requestData);

        return redirect('admin/engindoc')->with('flash_message', 'Engindoc updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Engindoc::destroy($id);

        return redirect('admin/engindoc')->with('flash_message', 'Engindoc deleted!');
    }
}
