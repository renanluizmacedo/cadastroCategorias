<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;

use Illuminate\Http\Request;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $prod = Produto::all();
        return view('produtos', compact('prod'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cats = Categoria::all();
        return view('novoproduto', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = new Produto();
        $cat = new Categoria();

        $prod->nome = $request->input('nomeProduto');
        $prod->estoque = $request->input('qntdEstoque');
        $prod->preco = $request->input('preco');

        $cat = Categoria::find($request->input('categoria'));
        
        if(isset($cat)){
            $prod->categoria_id = $cat->id;
        }   
        $prod->save();
        return redirect('/produtos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $prod = Produto::find($id);
        $cat = Categoria::all();
        
        return view('infoprodutos',compact('prod','cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)){
            return view('editarproduto',compact('prod'));
        }        
        return redirect('/produtos');    
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
        $prod = Produto::find($id);
        if(isset($prod)){
            $prod->nome = $request->input('nomeProduto');
            $prod->save();
        }        
        return redirect('/produtos');    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $prod = Produto::find($id);

        if(isset($prod)){
            $prod->delete();
        }
        return redirect('/produtos');
 
    }
}
