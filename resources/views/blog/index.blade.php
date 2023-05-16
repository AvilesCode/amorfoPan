@extends('layouts.blogs')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="jumbotron">
                    <span style="font-size: 50px">Publicaciones recientes</span>
                </div>

                <!-- Listado de publicaciones recientes -->
                @foreach($publicaciones as $post)
                    <div class="form-group">
                        <div class="row" style="margin-bottom: 20px; border-left: 8px solid rebeccapurple; border-bottom: 1px solid rebeccapurple">
                            <div class="col-lg-3 bg-white text-center align-middle" style="border-top: 1px solid rebeccapurple">
                                <!--img style="width: 100%; height: 100%; max-width: 200px; max-height: 200px; margin-top: auto; margin-bottom: auto" src=" asset('img/img4.png') " alt="img"-->
                                <span style="color: rebeccapurple; font-size: 140px">{{ substr($post->title,0,1) }}</span>
                            </div>
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-title text-center" style="font-size: 25px; margin-bottom: 0">
                                        <a href="{{ url('blog/post/'.$post->slug) }}" style="color: rebeccapurple">
                                            <strong>
                                                {{$post->title}}
                                            </strong>
                                        </a>
                                    </div>
                                    <div class="card-body" >
                                        {{substr($post->content, 0, 300)}}
                                    </div>
                                    <div class="card-footer bg-white">
                                        <span style="font-size: smaller">Publicado el: {{$post->created_at}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $publicaciones->links() }}
            </div>
        </div>
    </div>
@endsection
