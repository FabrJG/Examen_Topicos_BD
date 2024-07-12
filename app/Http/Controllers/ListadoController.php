<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Listado;
use App\Http\Requests\CreateListadoRequest;

class ListadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listado = Listado::orderBy('nombre', 'asc')->get();

        return view('listado', compact('listado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateListadoRequest $request)
    {
        $nombre = request('nombre');
        $curso = request('curso');
        $nota_1 = request('nota_1');
        $nota_2 = request('nota_2');
        $promedio = ($nota_1 + $nota_2)/2;
        if ($promedio>=13.5) {
            $condicion = 'aprobado';
        }else{
            $condicion = 'desaprobado';
        }

        Listado::create([
            'nombre' => $nombre,
            'curso' => $curso,
            'nota_1' => $nota_1,
            'nota_2' => $nota_2,
            'promedio' => $promedio,
            'condicion' => $condicion,
        ]);

        /*
        */

        return redirect()->route('listado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('show', ['alumno' => Listado::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
