@extends('layouts.app',["current"=>"categorias"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/categorias" method="post">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria" 
                       id="nomeCategoria" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            <a href="/categorias" class ="btn btn-danger btn-sm">Cancel</a>

        </form>
    </div>
</div>

@endsection