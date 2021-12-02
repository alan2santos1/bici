<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\registroBici;
use Illuminate\Http\Request;

class registroBiciController extends Controller
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
            $registrobici = registroBici::where('Foto', 'LIKE', "%$keyword%")
                ->orWhere('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('ApellidoPaterno', 'LIKE', "%$keyword%")
                ->orWhere('ApellidoMaterno', 'LIKE', "%$keyword%")
                ->orWhere('Sexo', 'LIKE', "%$keyword%")
                ->orWhere('Telefono', 'LIKE', "%$keyword%")
                ->orWhere('Correo', 'LIKE', "%$keyword%")
                ->orWhere('Edad', 'LIKE', "%$keyword%")
                ->orWhere('Identificacion', 'LIKE', "%$keyword%")
                ->orWhere('Alcaldia', 'LIKE', "%$keyword%")
                ->orWhere('Calle', 'LIKE', "%$keyword%")
                ->orWhere('Numero', 'LIKE', "%$keyword%")
                ->orWhere('NumeroInterior', 'LIKE', "%$keyword%")
                ->orWhere('colonia', 'LIKE', "%$keyword%")
                ->orWhere('Cp', 'LIKE', "%$keyword%")
                ->orWhere('comprobante', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $registrobici = registroBici::latest()->paginate($perPage);
        }

        return view('registro-bici.index', compact('registrobici'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('registro-bici.create');
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
        
        $requestData = $request->all();
                if ($request->hasFile('Foto')) {
            $requestData['Foto'] = $request->file('Foto')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('Identificacion')) {
            $requestData['Identificacion'] = $request->file('Identificacion')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('comprobante')) {
            $requestData['comprobante'] = $request->file('comprobante')
                ->store('uploads', 'public');
        }

        registroBici::create($requestData);

        return redirect('registro-bici')->with('flash_message', 'registroBici added!');
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
        $registrobici = registroBici::findOrFail($id);

        return view('registro-bici.show', compact('registrobici'));
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
        $registrobici = registroBici::findOrFail($id);

        return view('registro-bici.edit', compact('registrobici'));
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
        
        $requestData = $request->all();
                if ($request->hasFile('Foto')) {
            $requestData['Foto'] = $request->file('Foto')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('Identificacion')) {
            $requestData['Identificacion'] = $request->file('Identificacion')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('comprobante')) {
            $requestData['comprobante'] = $request->file('comprobante')
                ->store('uploads', 'public');
        }

        $registrobici = registroBici::findOrFail($id);
        $registrobici->update($requestData);

        return redirect('registro-bici')->with('flash_message', 'registroBici updated!');
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
        registroBici::destroy($id);

        return redirect('registro-bici')->with('flash_message', 'registroBici deleted!');
    }
}
