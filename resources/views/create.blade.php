@extends('templates/template')

@section('content')
<br>
<div class="col-3 m-auto">
    <form id="formCad" name="formCad" method="post" action="{{url('cadastrar')}}">
    {{ csrf_field() }}

        <input class="form-control" type="text" name="name" id="name" placeholder="Nome:" required>
        <input class="form-control" type="email" name="email" id="email" placeholder="E-mail:" required>
        <input class="form-control" type="date" name="nasc" id="nasc" placeholder="Data de Nascimento:" required>
        <input class="btn btn-success mt-2 btn-block" type="submit" value="Cadastrar">
    </form>
</div>
@endsection