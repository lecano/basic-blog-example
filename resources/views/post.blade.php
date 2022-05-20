@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if ($post->image)
                            <img src="{{ $post->get_image }}" alt="{{ $post->title }}"
                                class="img-fluid mx-auto d-block mb-3">
                        @endif

                        @if ($post->iframe)
                            <div class="ratio ratio-16x9 mb-3">
                                {!! $post->iframe !!}
                            </div>
                        @endif

                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {{ $post->body }}
                        </p>

                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
