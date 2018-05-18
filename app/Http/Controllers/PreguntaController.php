<?php

namespace App\Http\Controllers;

use App\Pregunta;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.preguntas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        try {
            $pregunta = new Pregunta;
            $pregunta->pregunta = $request['pregunta'];
            $pregunta->save();
            $data = [];
            foreach ($request['correctas'] as $key => $value) {
                $data[] = [
                    'respuesta' => $value,
                    'correcta' => 1
                ];
            }
            foreach ($request['incorrectas'] as $key => $value) {
                $data[] = [
                    'respuesta' => $value,
                    'correcta' => 0
                ];
            }
            $pregunta->respuestas()->createMany($data);
            return redirect()
                ->route('pregunta.create')
                ->with('success', 'Datos guardados correctamente');
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->withErrors(['Error al guardar' => 'Error al intentar guardar']);    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $pregunta)
    {
        //
    }
}
