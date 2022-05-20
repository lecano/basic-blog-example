@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Artículo</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label class="form-label">Título *</label>
                                <input type="text" name="title" class="form-control" required
                                    value="{{ old('title', $post->title) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Contenido *</label>
                                <textarea name="body" class="form-control" rows="6" required>{{ old('body', $post->body) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contenido embebido</label>
                                <textarea name="iframe" class="form-control">{{ old('iframe', $post->iframe) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
