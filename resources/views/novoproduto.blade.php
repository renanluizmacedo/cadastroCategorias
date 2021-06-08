@extends('layouts.app',["current"=>"categorias"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="post">
                @csrf                
                <div class="form-group">
                    <label for="nomeProduto">Nome Do Produto</label>
                    <input type="text" class="form-control" 
                            name = "nomeProduto" id = "nomeProduto" placeholder="Produto">
                    


                    <label for="qntdEstoque">Quantidade estoque</label>
                    <input type="text" class="form-control" 
                            name = "qntdEstoque" id = "qntdEstoque" placeholder="Quantidade em estoque">
                    

                    <label for="preco">Preço unitario</label>
                    <input type="text" class="form-control" 
                            name="preco" id = "preco" placeholder="Valor unitário">

                    <label for="categoria">Categoria </label>

                    <select name="categoria" id = 
                    "categoria" class="form-control form-select" aria-label="Default select example">

                    <option selected>Categorias</option>
        @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->nome}}</option>

        @endforeach
                    </select>
                    
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/produtos" class ="btn btn-danger btn-sm">Cancel</a>
            </form>

        </div>
    </div>
@endsection

