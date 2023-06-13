<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\ComicRequest;

class resourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $comics = Comic::all();
      return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
      $form_data =              $request->all();
      $new_comic =              new Comic();

      $new_comic->title =       $form_data['title'];
      $new_comic->thumb =       $form_data['thumb'];
      $new_comic->price =       $form_data['price'];
      $new_comic->series =      $form_data['series'];
      $new_comic->sale_date =   $form_data['sale_date'];
      $new_comic->type =        $form_data['type'];
      $new_comic->artists =     $form_data['artists'];
      $new_comic->writers =     $form_data['writers'];
      $new_comic->description = $form_data['description'];

      $new_comic->save();
      // dd($new_comic);
      // ?? redirect non riconosciuto?
      return redirect()->route('comics.show', $new_comic);
      // return view('comics.show', compact('new_comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
      return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
      return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
      $form_data = $request->all();


      // niente token slug niente update???
      // Add [_token] to fillable property to allow mass assignment on [App\Models\Comic].
      $comic->update($form_data);

      return view('pastas.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {   $title = $comic->title;
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', "comic: $title è stata eliminata correttamente");
    }
}
