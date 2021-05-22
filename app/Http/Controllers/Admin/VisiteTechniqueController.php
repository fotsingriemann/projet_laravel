<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Engin;
use App\Models\VisiteTechnique;
use Illuminate\Http\Request;

class VisiteTechniqueController extends Controller
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

            $visitetechnique = VisiteTechnique::latest()->paginate($perPage);
        

        return view('admin.visite-technique.index', compact('visitetechnique'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $engins = Engin::all();
        return view('admin.visite-technique.create',compact('engins'));
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
			'effectuer_par' => 'required',
			'montant' => 'required',
			'engin_id' => 'required|exists:engins,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('piece_jointe')) {
            $requestData['piece_jointe'] = $request->file('piece_jointe')
                ->store('uploads', 'public');
        }

        VisiteTechnique::create($requestData);

        return redirect('admin/visite-technique')->with('flash_message', 'VisiteTechnique added!');
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
       
        $visitetechnique = VisiteTechnique::findOrFail($id);

        return view('admin.visite-technique.show', compact('visitetechnique'));
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
        $visitetechnique = VisiteTechnique::findOrFail($id);
        $engins = Engin::all();
        return view('admin.visite-technique.edit', compact('visitetechnique','engins'));
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
			'date_debut_val' => 'required',
			'date_fin_val' => 'required',
			'effectuer_par' => 'required',
			'engin' => 'required',
			'montant' => 'required',
			'engin_id' => 'required|exists:engins,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('piece_jointe')) {
            $requestData['piece_jointe'] = $request->file('piece_jointe')
                ->store('uploads', 'public');
        }

        $visitetechnique = VisiteTechnique::findOrFail($id);
        $visitetechnique->update($requestData);

        return redirect('admin/visite-technique')->with('flash_message', 'VisiteTechnique updated!');
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
        VisiteTechnique::destroy($id);

        return redirect('admin/visite-technique')->with('flash_message', 'VisiteTechnique deleted!');
    }
}
