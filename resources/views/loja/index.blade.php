@extends('base')
@section('conteudo')
    <h1>Lojas Bacanas</h1>
    <table>
        <thead>
            <tr>
                <th>Nome da Loja</th>
                <th>Área da Loja</th>
                <th>Data de Inauguração</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($LojaCollection as $loja)
                <tr>
                    <td>{{ $loja->nomeLoja }}</td>
                    <td>{{ $loja->areaTotal }}</td>
                    <td>{{ $loja->dataInauguracao }}</td>
                    <td><a href="/lojas/{{$loja->id}}/edit">Editar</a></td>
                    <td><a href="/lojas/{{$loja->id}}">Excluir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
<br>

    {{$LojaCollection->links() }}

    <a href="/lojas/create">Novo</a>
@endsection