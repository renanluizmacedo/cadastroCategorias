@extends('layouts.app',["current" => "produtos"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos/novo" method="post">
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
                            name = "preco" id = "preco" placeholder="Valor unitário">
                    
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
            </form>

        </div>
    </div>
@endsection

