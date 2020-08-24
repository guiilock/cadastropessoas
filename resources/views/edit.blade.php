@extends('templates/template')

@section('content')

<br>
<div class="col-3 m-auto">
    <form id="formEdit" name="formEdit" method="post" action="{{url("atualizar/$pessoa->id")}}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}

        <input class="form-control" type="text" name="name" id="name" placeholder="Nome:" value="{{$pessoa->name}}">
        <input class="form-control" type="email" name="email" id="email" placeholder="E-mail:" value="{{$pessoa->email}}">
        <input class="form-control" type="date" name="nasc" id="nasc" placeholder="Data de Nascimento:" value="{{$pessoa->data_nascimento}}">
        <input class="btn btn-success mt-2 btn-block" type="submit" value="Atualizar">
    </form>
</div>

@endsection