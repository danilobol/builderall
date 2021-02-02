@extends('layouts.siteCliente')


@section('conteudo')

    <div class="container">
        <h3 class="center">Lista de Clientes</h3>
        <hr>
        <div class="row">
            <form action="{{route('clientes.search')}}" method="post" class="form form-inline">
                @csrf
                <input type="text" name="filter" id="filter" placeholder="Filtrar: " class="form-control">
                <button class="btn btn-info" type="submit">Pesquisar</button>
            </form>
        </div>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Criado em</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->name }}</td>
                        <td>{{ $registro->Id_cities }}</td>
                        <td>{{ $registro->created_at }}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('admin.clientes.editar',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('admin.clientes.deletar',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <div class="row" align="center">
                {{$registros->links()}}
            </div>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.clientes.adicionar',$registro->id) }}">Adicionar</a>

        </div>

    </div>

@endsection
