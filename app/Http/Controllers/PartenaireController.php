<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;
use App\Models\CategoriePartenaire;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoriePartenaire::all();
        return view('create_partenaire', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'email' => 'required'
        ]);

        $partenaire = new Partenaire();
        $partenaire->photo = $request->photo;
        $partenaire->name = $request->name;
        $partenaire->email = $request->email;
        $partenaire->phone = $request->phone;
        $partenaire->message = $request->message;
        if ($request->categorie_id === null) {
            $partenaire->categorie_id = $request->categorie_id;
        } else {
            $partenaire->categorie_id = 1;
        }
        $partenaire->enable = false;
        $partenaire->save();
        //Mail::to("contact@sup-connexion.com")->send(new ContactMail($contact));
        return redirect()->route('home')->with('success', 'Votre demande a été bien prise en compte et nous vous répondrons dans un meilleur delai.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
