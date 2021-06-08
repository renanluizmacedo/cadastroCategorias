@extends('layouts.app',["current"=>"produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome Do Produto</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach($prod as $p)
                        <tr>
                            <td>{{$p->id}}></td>
                            <td>{{$p->nome}}></td>
                            <td>
                                <a href="/produtos/editar/{{$p->id}}" 
                                    class="btn btn-sm btn-primary">Editar</a>
                                <a href="/produtos/apagar/{{$p->id}}" 
                                    class="btn btn-sm btn-danger">Apagar</a>
 
                                <a href="/produtos/show/{{$p->id}}" 
                                    class="btn btn-sm btn-warning">Info</a>
                            </td>
                        </tr>

    @endforeach
                    </tbody>
                </table>
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" 
                role="button">Novo Produto</a>
        </div>
    </div>
@endsection