@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu de Publicaciones') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="btn form-control" style="background-color: rebeccapurple" href="{{ url('admin/post') }}">
                                        <span class="text-white font-weight-bold">Listado</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn form-control text-white font-weight-bold" style="background-color: rebeccapurple" href="{{ url('admin/post/create') }}">
                                        <span class="text-white font-weight-bold">Crear</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
