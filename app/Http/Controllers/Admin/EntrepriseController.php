<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
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
            $entreprise = Entreprise::where('logo', 'LIKE', "%$keyword%")
                ->orWhere('nom_client', 'LIKE', "%$keyword%")
                ->orWhere('localisation', 'LIKE', "%$keyword%")
                ->orWhere('telephone1', 'LIKE', "%$keyword%")
                ->orWhere('telephone2', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('horaire_ouverture', 'LIKE', "%$keyword%")
                ->orWhere('jours_ouverture', 'LIKE', "%$keyword%")
                ->orWhere('nombre_engin', 'LIKE', "%$keyword%")
                ->orWhere('nature_engin', 'LIKE', "%$keyword%")
                ->orWhere('responsable', 'LIKE', "%$keyword%")
                ->orWhere('secteur_activite', 'LIKE', "%$keyword%")
                ->orWhere('sites', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $entreprise = Entreprise::latest()->paginate($perPage);
        }

        return view('admin.entreprise.index', compact('entreprise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.entreprise.create');
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
			'nom_client' => 'required',
			'telephone1' => 'required',
			'telephone2' => 'required',
			'email' => 'required',
			'horaire_ouverture' => 'required',
			'jours_ouverture' => 'required',
			'nombre_engin' => 'required',
			'nature_engin' => 'required',
			'responsable' => 'required',
			'secteur_activite' => 'required',
			'sites' => 'required'
		]);
        $requestData = $request->all();
                if ($request->hasFile('logo')) {
            $requestData['logo'] = $request->file('logo')
                ->store('uploads', 'public');
        }

        Entreprise::create($requestData);

        return redirect('admin/entreprise')->with('flash_message', 'Entreprise added!');
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
        $entreprise = Entreprise::findOrFail($id);

        return view('admin.entreprise.show', compact('entreprise'));
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
        $entreprise = Entreprise::findOrFail($id);

        return view('admin.entreprise.edit', compact('entreprise'));
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
			'nom_client' => 'required',
			'telephone1' => 'required',
			'telephone2' => 'required',
			'email' => 'required',
			'horaire_ouverture' => 'required',
			'jours_ouverture' => 'required',
			'nombre_engin' => 'required',
			'nature_engin' => 'required',
			'responsable' => 'required',
			'secteur_activite' => 'required',
			'sites' => 'required'
		]);
        $requestData = $request->all();
                if ($request->hasFile('logo')) {
            $requestData['logo'] = $request->file('logo')
                ->store('uploads', 'public');
        }

        $entreprise = Entreprise::findOrFail($id);
        $entreprise->update($requestData);

        return redirect('admin/entreprise')->with('flash_message', 'Entreprise updated!');
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
        Entreprise::destroy($id);

        return redirect('admin/entreprise')->with('flash_message', 'Entreprise deleted!');
    }
}
