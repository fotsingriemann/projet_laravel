<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Patente;
use Illuminate\Http\Request;

class PatenteController extends Controller
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
            $patente = Patente::where('engin_name', 'LIKE', "%$keyword%")
                ->orWhere('montant', 'LIKE', "%$keyword%")
                ->orWhere('date_debut_val', 'LIKE', "%$keyword%")
                ->orWhere('date_fin_val', 'LIKE', "%$keyword%")
                ->orWhere('delivrer_par', 'LIKE', "%$keyword%")
                ->orWhere('piece_jointe', 'LIKE', "%$keyword%")
                ->orWhere('engin_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $patente = Patente::latest()->paginate($perPage);
        }

        return view('admin.patente.index', compact('patente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.patente.create');
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
			'engin_name' => 'required',
			'date_debut_val' => 'required',
			'date_fin_val' => 'required',
			'delivrer_par' => 'required',
			'piece_jointe' => 'required',
			'montant' => 'required',
			'engin_id' => 'required|exists:engins,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('piece_jointe')) {
            $requestData['piece_jointe'] = $request->file('piece_jointe')
                ->store('uploads', 'public');
        }

        Patente::create($requestData);

        return redirect('admin/patente')->with('flash_message', 'Patente added!');
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
        $patente = Patente::findOrFail($id);

        return view('admin.patente.show', compact('patente'));
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
        $patente = Patente::findOrFail($id);

        return view('admin.patente.edit', compact('patente'));
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
			'engin_name' => 'required',
			'date_debut_val' => 'required',
			'date_fin_val' => 'required',
			'delivrer_par' => 'required',
			'piece_jointe' => 'required',
			'montant' => 'required',
			'engin_id' => 'required|exists:engins,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('piece_jointe')) {
            $requestData['piece_jointe'] = $request->file('piece_jointe')
                ->store('uploads', 'public');
        }

        $patente = Patente::findOrFail($id);
        $patente->update($requestData);

        return redirect('admin/patente')->with('flash_message', 'Patente updated!');
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
        Patente::destroy($id);

        return redirect('admin/patente')->with('flash_message', 'Patente deleted!');
    }
}
