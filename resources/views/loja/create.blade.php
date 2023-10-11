@extends('base')
@section('conteudo')

<form action="/lojas" method="post">
    @csrf
    <p>Nome: <input type="text" name="nomeLoja" value="{{old('nomeLoja')}}"></p>
    @if($errors->has('nomeLoja'))
        <p style="color:red;">{{$errors->first('nomeLoja')}}</p>
    @endif

    <p>Área Total: <input type="text" name="areaTotal" value="{{old('areaTotal')}}"></p>
    @if($errors->has('areaTotal'))
        <p style="color:red;">{{$errors->first('areaTotal')}}</p>
    @endif

    <p>Data de Inauguração: <input type="date" name="dataInauguracao" value="{{old('dataInauguracao')}}" placeholder="ano-mes-dia"></p>
    @if($errors->has('dataInauguracao'))
        <p style="color:red;">{{$errors->first('dataInauguracao')}}</p>
    @endif

    <p>
        <input type="submit" value="Enviar">
        <a href="/lojas">Voltar</a>  
    </p>
</form>

@endsection