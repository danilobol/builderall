@extends('layouts.siteCliente')


@section('conteudo')

    <div  class="container">
        <h3 class="center">Adicionar Cliente</h3>
        <div class="row center">
            <form action="../../admin/clients/salvar" method="post" enctype="multipart/form-data">
                @csrf
                @include('layouts._includes._form')
                <button class="btn palette-accent-deep-orange">Adicionar</button>
            </form>
        </div>

    </div>



    {{--    <dashboard v-bind:user="{{$registros}}"></dashboard>--}}

@endsection
