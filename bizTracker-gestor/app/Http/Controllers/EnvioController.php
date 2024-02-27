<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\Request;

/**
 * Class EnvioController
 * @package App\Http\Controllers
 */
class EnvioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $envios = Envio::paginate();

        return view('envio.index', compact('envios'))
            ->with('i', (request()->input('page', 1) - 1) * $envios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $envio = new Envio();
        return view('envio.create', compact('envio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Envio::$rules);

        $envio = Envio::create($request->all());

        return redirect()->route('envios.index')
            ->with('success', 'Envio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $envio = Envio::find($id);

        return view('envio.show', compact('envio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $envio = Envio::find($id);

        return view('envio.edit', compact('envio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Envio $envio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Envio $envio)
    {
        request()->validate(Envio::$rules);

        $envio->update($request->all());

        return redirect()->route('envios.index')
            ->with('success', 'Envio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $envio = Envio::find($id)->delete();

        return redirect()->route('envios.index')
            ->with('success', 'Envio deleted successfully');
    }
}
