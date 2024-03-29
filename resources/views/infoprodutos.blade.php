@extends('layouts.app',["current"=>"produtos"],["current"=>"categoria"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Informações Produtos</h5>
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Nome Do Produto</th>
                            <th>Categoria </th>
                            <th>Quantidade Estoque</th>
                            <th>Valor Unitario </th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$prod->nome}}</td>
                        @foreach($cat as $c)

                            @if($c->id == $prod->categoria_id)
                                <td>{{$c->nome}}</td>
                            @endif
                        @endforeach


                        <td>{{$prod->estoque}}</td>
                        <td>{{$prod->preco}}</td>
                    </tr>

                    </tbody>
                </table>
        </div>
        <div class="card-footer">
            <a href="/produtos" class="btn btn-sm btn-primary" 
                role="button">Voltar</a>
        </div>
    </div>
@endsection