<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bulletin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulletins = Bulletin::all();
        return view('bulletins', compact('bulletins'));
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
        $input = $request->all();

        $validator = Validator::make($input, [
            'titre' => 'required'
        ]);

        $bulletin = new Bulletin();
        $bulletin->titre = $input['titre'];;
        $bulletin->texte = $input['texte'];;
        $bulletin->file = $input['file'];;

        if ($request->file('file')) {
            @unlink(public_path('uploads/bulletin/'.$bulletin->file));
            $bulletinFile = $request->file('file');
            $bulletinName  = date('d-m-Y') . '.' . uniqid() . '.' . $bulletinFile->getClientOriginalName();
            $bulletinPath  = public_path('uploads/bulletin');
            $bulletinFile->move($bulletinPath, $bulletinName);
            $bulletin->file = $bulletinName;
        }
        $bulletin->save();
        return redirect()->route('admin.home')->with('success', 'Document chargé avec succès!');
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
