<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Engin;
use App\Models\Assurance;
use Illuminate\Http\Request;

class AssuranceController extends Controller
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

 
            $assurance = Assurance::latest()->paginate($perPage);
        

        return view('admin.assurance.index', compact('assurance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $engins = Engin::all();
        return view('admin.assurance.create',compact('engins'));
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
			'piece_jointe' => 'required',
			'montant' => 'required',
			'assureur' => 'required',
			'engin_id' => 'required|exists:engins,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('piece_jointe')) {
            $requestData['piece_jointe'] = $request->file('piece_jointe')
                ->store('uploads', 'public');
        }

        Assurance::create($requestData);

        return redirect('admin/assurance')->with('flash_message', 'Assurance added!');
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
        $assurance = Assurance::findOrFail($id);

        return view('admin.assurance.show', compact('assurance'));
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
        $assurance = Assurance::findOrFail($id);

        return view('admin.assurance.edit', compact('assurance'));
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
			'piece_jointe' => 'required',
			'montant' => 'required',
			'assureur' => 'required',
			'engin_id' => 'required|exists:engins,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('piece_jointe')) {
            $requestData['piece_jointe'] = $request->file('piece_jointe')
                ->store('uploads', 'public');
        }

        $assurance = Assurance::findOrFail($id);
        $assurance->update($requestData);

        return redirect('admin/assurance')->with('flash_message', 'Assurance updated!');
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
        Assurance::destroy($id);

        return redirect('admin/assurance')->with('flash_message', 'Assurance deleted!');
    }
}
