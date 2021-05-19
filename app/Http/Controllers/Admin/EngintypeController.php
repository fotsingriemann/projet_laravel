<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Engintype;
use Illuminate\Http\Request;

class EngintypeController extends Controller
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
            $engintype = Engintype::where('Type_engin', 'LIKE', "%$keyword%")
                ->orWhere('Description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $engintype = Engintype::latest()->paginate($perPage);
        }

        return view('admin.engintype.index', compact('engintype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.engintype.create');
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
			'Type_engin' => 'required'
		]);
        $requestData = $request->all();
        
        Engintype::create($requestData);

        return redirect('admin/engintype')->with('flash_message', 'Engintype added!');
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
        $engintype = Engintype::findOrFail($id);

        return view('admin.engintype.show', compact('engintype'));
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
        $engintype = Engintype::findOrFail($id);

        return view('admin.engintype.edit', compact('engintype'));
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
			'Type_engin' => 'required'
		]);
        $requestData = $request->all();
        
        $engintype = Engintype::findOrFail($id);
        $engintype->update($requestData);

        return redirect('admin/engintype')->with('flash_message', 'Engintype updated!');
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
        Engintype::destroy($id);

        return redirect('admin/engintype')->with('flash_message', 'Engintype deleted!');
    }
}
