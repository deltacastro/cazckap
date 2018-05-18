<?php

namespace App\Http\Controllers;

use App\User;
use App\Pregunta;
use App\Respuesta;
use App\Puntuacion;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('game.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntas = Pregunta::inRandomOrder()->take(10)->get();
        return view('game.preguntas', compact('preguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $respuestas = $request['respuesta'];
        $puntos = 0;
        $segundos = '60';
        $user_id = \Auth::id();
        foreach ($respuestas as $pregunta_id => $respuesta_id) {
            $puntos += Respuesta::find($respuesta_id)->correcta;
        }
        $puntuacion = new Puntuacion;
        $puntuacion->time = $segundos;
        $puntuacion->user_id = $user_id;
        $puntuacion->puntuacion = $puntos;
        $puntuacion->save();
        $puntuaciones = Puntuacion::orderByRaw('puntuacion, time DESC')->get();
        return view('game.finalgame', compact('puntuacion', 'puntuaciones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
