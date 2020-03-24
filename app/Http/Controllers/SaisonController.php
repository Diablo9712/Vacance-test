<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saison;
class SaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $saisons = Saison::all();
      return view('saison.index',compact('saisons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('saison.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $saison = new Saison();

      $saison->libelle = $request->input('title');
      $saison->date_debut = $request->input('debut');
      $saison->date_fin = $request->input('fin');
      $saison->save();

      return redirect('saison');
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
      $saison = Saison::find($id);

      return view('saison.edit',['saison' => $saison]);
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
      $saison = Saison::find($id);

      $saison->libelle = $request->input('title');
      $saison->date_debut = $request->input('debut');
      $saison->date_fin = $request->input('fin');

      $saison->save();
      return redirect('saison');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $saison = Saison::find($id);

      $saison->delete();

      return redirect('saison');
    }
}
