<?php

namespace App\Http\Controllers\Admin;
use App\Models\Entreprise;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Engintype;
use App\Models\Engin;
use Illuminate\Http\Request;

class EnginController extends Controller
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

        
            $engin = Engin::latest()->paginate($perPage);
    

        return view('admin.engin.index', compact('engin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $enginTypes = Engintype::all();
        $entreprises = Entreprise::all();
        return view('admin.engin.create',compact('enginTypes','entreprises'));
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
			'immatriculation' => 'required',
			'marque_serie' => 'required',
			'modele' => 'required',
			'numero_chassis' => 'required',
			'date_de_mise_en_circulation' => 'required',
			'carburant' => 'required',
			'couleur' => 'required',
			'conduit_par' => 'required',
			'Image' => 'required',
			'entreprise_id' => 'required|exists:entreprises,id',
			'engintype_id' => 'required|exists:engintypes,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('Image')) {
            $requestData['Image'] = $request->file('Image')
                ->store('uploads', 'public');
        }

        Engin::create($requestData);

        return redirect('admin/engin')->with('flash_message', 'Engin added!');
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
        $engin = Engin::findOrFail($id);

        return view('admin.engin.show', compact('engin'));
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
        $engin = Engin::findOrFail($id);

        return view('admin.engin.edit', compact('engin'));
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
			'immatriculation' => 'required',
			'marque_serie' => 'required',
			'modele' => 'required',
			'numero_chassis' => 'required',
			'date_de_mise_en_circulation' => 'required',
			'carburant' => 'required',
			'couleur' => 'required',
			'conduit_par' => 'required',
			'Image' => 'required',
			'entreprise_id' => 'required|exists:entreprises,id',
			'engintype_id' => 'required|exists:engintypes,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('Image')) {
            $requestData['Image'] = $request->file('Image')
                ->store('uploads', 'public');
        }

        $engin = Engin::findOrFail($id);
        $engin->update($requestData);

        return redirect('admin/engin')->with('flash_message', 'Engin updated!');
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
        Engin::destroy($id);

        return redirect('admin/engin')->with('flash_message', 'Engin deleted!');
    }
}
