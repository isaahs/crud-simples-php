@extends('base')
@section('conteudo')
<dl>
    <dt>Nome</dt>
    <dd>{{ $objetoLoja->nomeLoja }}</dd>

    <dt>Área da Loja</dt>
    <dd>{{ $objetoLoja->areaTotal }}</dd>

    <dt>Data de Inauguração</dt>
    <dd>{{ $objetoLoja->dataInalguracao }}</dd>
</dl>
<form action="/lojas/{{$objetoLoja->id}}" method="post">
@csrf
@method('DELETE')
<input type="submit" value="Confirmar">
<a href="/lojas">Voltar</a>
</form>
@endsection