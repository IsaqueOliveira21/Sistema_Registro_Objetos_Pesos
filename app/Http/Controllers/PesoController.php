<?php

namespace App\Http\Controllers;

use App\Http\Resources\PesoResource;
use App\Models\Peso;
use App\Services\PesoService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PesoController extends Controller
{
    private $service;

    public function __construct(PesoService $pesoService)
    {
        $this->service = $pesoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $items = PesoResource::collection($this->service->index());
        return view('itens.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('itens.dados');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $input = $request->validate([
            'item' => 'required|string',
            'peso' => 'required|numeric',
            'tipo_peso' => 'required|string',
        ]);

        $peso = $this->service->store($input);
        $novoPeso = new PesoResource($peso);
        return redirect()->route('pesos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peso  $peso
     * @return Response
     */
    public function show(Peso $peso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peso  $peso
     * @return Response
     */
    public function edit(Peso $peso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peso  $peso
     * @return Response
     */
    public function update(Request $request, Peso $peso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peso  $peso
     * @return Response
     */
    public function destroy(Peso $peso)
    {
        //
    }
}
