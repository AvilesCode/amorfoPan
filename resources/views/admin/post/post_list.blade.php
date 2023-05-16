@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Listado de Publicaciones') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="form-group">
                            @foreach($publicaciones as $post)
                                <div class="row" style="border-left: 8px solid rebeccapurple; border-bottom: 1px solid rebeccapurple; border-top: 1px solid rebeccapurple">
                                    <!-- Letra -->
                                    <div class="col-lg-1 bg-white text-center" style="border-right: 1px solid">
                                        <span style="color: rebeccapurple; font-size: 30px">{{ substr($post->title,0,1) }}</span>
                                    </div>
                                    <!-- descripción -->
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <strong style="font-size: 15px; color: rebeccapurple"> {{$post->title}} </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span style="font-size: x-small">Publicado el: {{$post->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Botones -->
                                    <div class="col-md-2">
                                        <form action="{{url('admin/post/'.$post->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn form-control text-white bg-danger" >Eliminar</button>
                                        </form>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="btn form-control text-white bg-primary" href="{{ url('admin/post/'.$post->id.'/edit') }}">Actualizar</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $publicaciones->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
