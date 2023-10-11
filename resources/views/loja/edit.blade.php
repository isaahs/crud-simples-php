@extends('base')
@section('conteudo')
<form action="/lojas/{{$objetoLoja->id}}" method="post">
    @csrf
    @method('PUT')
    <p>Nome: <input type="text" name="nomeLoja" value="{{empty(old('nomeLoja')) ? $objetoLoja->nomeLoja : old('nomeLoja')}}"></p>
    @if($errors->has('nomeLoja'))
        <p style="color:red;">{{$errors->first('nomeLoja')}}</p>
    @endif

    <p>Área da Loja: <input type="text" name="areaTotal" value="{{empty(old('areaTotal')) ? $objetoLoja->areaTotal : old('areaTotal')}}" ></p>
    @if($errors->has('areaTotal'))
        <p style="color:red;">{{$errors->first('areaTotal')}}</p>
    @endif


    <p>Data de Inauguração : <input type="date" name="dataInauguracao" value="{{empty(old('dataInauguracao')) ? $objetoLoja->dataInauguracao : old('dataInauguracao')}}"></p>
    @if($errors->has('dataInauguracao'))
        <p style="color:red;">{{$errors->first('dataInauguracao')}}</p>
    @endif

    <p>
        <input type="submit" value="Enviar">
        <a href="/lojas">Voltar</a>
    </p>
</form>
@endsection