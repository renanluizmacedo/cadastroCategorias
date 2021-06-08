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
    @foreach($prod as $p)
                        <tr>
                            <td>{{$p->nome}}</td>
                            @foreach($cat as $c)

                                @if($c->id == $p->categoria_id)
                                    <td>{{$c->nome}}</td>
                                @endif
                            @endforeach


                            <td>{{$p->estoque}}</td>
                            <td>{{$p->preco}}</td>
                        </tr>

    @endforeach
                    </tbody>
                </table>
        </div>
        <div class="card-footer">
            <a href="/produtos" class="btn btn-sm btn-primary" 
                role="button">Voltar</a>
        </div>
    </div>
@endsection