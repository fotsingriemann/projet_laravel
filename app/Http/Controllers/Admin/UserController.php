<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
            $user = User::where('nom_et_prenom', 'LIKE', "%$keyword%")
                ->orWhere('telephone1', 'LIKE', "%$keyword%")
                ->orWhere('telephone2', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('sexe', 'LIKE', "%$keyword%")
                ->orWhere('statut_matrimonial', 'LIKE', "%$keyword%")
                ->orWhere('nombre_enfant', 'LIKE', "%$keyword%")
                ->orWhere('localisation', 'LIKE', "%$keyword%")
                ->orWhere('personne_a_contacter', 'LIKE', "%$keyword%")
                ->orWhere('telephone', 'LIKE', "%$keyword%")
                ->orWhere('role', 'LIKE', "%$keyword%")
                ->orWhere('photo', 'LIKE', "%$keyword%")
                ->orWhere('photo_cni', 'LIKE', "%$keyword%")
                ->orWhere('entreprise_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $user = User::latest()->paginate($perPage);
        }

        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.user.create');
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
			'nom_et_prenom' => 'required',
			'telephone1' => 'required',
			'telephone2' => 'required',
			'email' => 'required',
			'sexe' => 'required',
			'statut_matrimonial' => 'required',
			'nombre_enfant' => 'required',
			'personne_a_contacter' => 'required',
			'telephone' => 'required',
			'role' => 'required',
			'photo' => 'required',
			'photo_cni' => 'required',
			'entreprise_id' => 'required|exists:entreprises,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_cni')) {
            $requestData['photo_cni'] = $request->file('photo_cni')
                ->store('uploads', 'public');
        }

        User::create($requestData);

        return redirect('admin/user')->with('flash_message', 'User added!');
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
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
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
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
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
			'nom_et_prenom' => 'required',
			'telephone1' => 'required',
			'telephone2' => 'required',
			'email' => 'required',
			'sexe' => 'required',
			'statut_matrimonial' => 'required',
			'nombre_enfant' => 'required',
			'personne_a_contacter' => 'required',
			'telephone' => 'required',
			'role' => 'required',
			'photo' => 'required',
			'photo_cni' => 'required',
			'entreprise_id' => 'required|exists:entreprises,id'
		]);
        $requestData = $request->all();
                if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_cni')) {
            $requestData['photo_cni'] = $request->file('photo_cni')
                ->store('uploads', 'public');
        }

        $user = User::findOrFail($id);
        $user->update($requestData);

        return redirect('admin/user')->with('flash_message', 'User updated!');
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
        User::destroy($id);

        return redirect('admin/user')->with('flash_message', 'User deleted!');
    }
}
