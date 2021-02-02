@extends('layouts.siteCliente')


@section('conteudo')

    <div class="container">
        <h3 class="center">Editar Cliente</h3>
        <div class="row">
            <form action="{{ route('admin.clientes.atualizar',$registro->id) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                @include('layouts._includes._form')
                <button class="btn palette-accent-deep-orange">Atualizar</button>
            </form>
        </div>

    </div>



    {{--    <dashboard v-bind:user="{{$registros}}"></dashboard>--}}

@endsection
