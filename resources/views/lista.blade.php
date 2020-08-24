@extends('templates/template')

@section('content')

<div class="col-8 m-auto">
            <div class="btn-group btn-group-lg btn-block">
                    <a type="button" class="btn btn-secondary" href="{{url('create')}}">Cadastrar</a>
            </div>
</div>

    <div class="col-8 m-auto">
    {{ csrf_field() }}
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Data de criação</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <tbody>
            @foreach($cadastro as $cadastros)
                <tr>
                    <th scope="row">{{$cadastros->id}}</th>
                    <td>{{$cadastros->name}}</td>
                    <td>{{$cadastros->email}}</td>
                    <td>{{$cadastros->data_nascimento}}</td>
                    <td>{{$cadastros->created_at}}</td>
                    <td>
                        <a href="{{url("pessoas/edit/$cadastros->id")}}">
                            <button class="btn btn-info">Editar</button>
                        </a>
                        <a href="{{url("delete/$cadastros->id")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection