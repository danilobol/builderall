@extends('layouts.site')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <example-component></example-component>
                        </div>
                    @endif

                    <div id="app">
                        <example-component></example-component>
                        </div>

                        <example-component></example-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
