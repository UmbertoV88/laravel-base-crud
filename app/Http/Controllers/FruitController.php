<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruit;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frutta = Fruit::all();
        $data = ['fruits' => $frutta];
        return view('fruits.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fruits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $fruit = new Fruit();
        // $fruit->name = $form_data['name'];
        // $fruit->varieta = $form_data['varieta'];
        // $fruit->peso = $form_data['peso'];

        // invece dei singoli elementi usiamo la funzione fill
        $fruit->fill($form_data);
        $fruit->save();
        return redirect()->route('fruits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fruit $fruit /*oppure $id*/)
    {
        // $fruit = Fruit::where('id', $id)->first();
        // oppure
        // $fruit = Fruit::find($id);
        return view('fruits.show', compact ('fruit'));//oppure ['fruit' => $fruit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fruit $fruit)
    {
        return view('fruits.edit', compact ('fruit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fruit $fruit)
    {
        $form_data = $request->all();
        $fruit->update($form_data);
        return redirect()->route('fruits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fruit $fruit /*oppure $id*/)
    {
        $fruit->delete();
        return redirect()->route('fruits.index');

    }
}
