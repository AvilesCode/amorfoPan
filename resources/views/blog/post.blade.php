@extends('layouts.blogs')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="jumbotron">
                    <span style="font-size: 50px; color: rebeccapurple">
                        <strong>
                            {{$publicacion->title}}
                        </strong>
                    </span>
                </div>

                <!-- Info de Publicacion -->
                <div class="form-group">
                    <div class="row" style="margin-bottom: 20px; border-left: 8px solid rebeccapurple; border-bottom: 1px solid rebeccapurple">
                        <div class="col-lg-3 bg-white text-center" style="border-top: 1px solid rebeccapurple">
                            <img style="width: 100%; height: 100%; max-width: 200px; max-height: 200px; margin-top: auto; margin-bottom: auto" src="{{ asset('img/'.$imagen) }}" alt="img">
                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-title text-center" style="font-size: 25px; margin-bottom: 0">
                                    <a href="{{ url('blog/post/'.$publicacion->slug) }}" style="color: rebeccapurple">

                                    </a>
                                </div>
                                <div class="card-body" >
                                    {{$publicacion->content}}
                                </div>
                                <div class="card-footer bg-white">
                                    <span style="font-size: smaller">Publicado el: {{$publicacion->created_at}}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            Markdown: <br>
                            {!! $publicacion->content_md !!}
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
