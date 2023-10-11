<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Request;
use App\Http\Requests\LojaRequest;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View ('loja.index') -> with ('LojaCollection',Loja::paginate(2));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View ('loja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LojaRequest $request)
    {
        Loja::create($request ->all());

        return redirect('/lojas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Loja $loja)
    {
        return View ('loja.show')-> with ('objetoLoja', $loja);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loja $loja)
    {
        return View ('loja.edit')-> with ( 'objetoLoja',$loja);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LojaRequest $request, Loja $loja)
    {
        $loja -> update ($request -> all());
        return redirect('/lojas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loja $loja)
    {
        $loja->delete();

        return redirect('/lojas');
    }
}
