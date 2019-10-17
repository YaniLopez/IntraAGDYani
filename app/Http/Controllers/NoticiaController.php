<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();

        return view('noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'titulo'=>'required',
        'descripcion'=> 'required',
        'imagen' => 'required'
      ]);
      $noticia = new Noticia([
        'titulo_nov' => $request->get('titulo'),
        'descripcion_nov'=> $request->get('descripcion'),
        'img_nov'=> $request->get('imagen')
      ]);
      $noticia->save();
      return redirect('/noticias')->with('success', 'Se ha guardado una nueva noticia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = Noticia::find($id);

        return view('noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'titulo_nov'=>'required',
        'descripcion_nov'=> 'required',
        'img_nov' => 'required'
      ]);

      $noticia = Noticia::find($id);
      $noticia->titulo_nov = $request->get('titulo_nov');
      $noticia->descripcion_nov = $request->get('descripcion_nov');
      $noticia->img_nov = $request->get('img_nov');
      $noticia->save();

      return redirect('/noticias')->with('success', 'Noticia modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::find($id);
        $noticia->delete();

      return redirect('/noticias')->with('success', 'La noticia fue eliminada correctamente');
    }
}
