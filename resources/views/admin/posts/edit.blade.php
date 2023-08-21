@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5"><strong>MODIFICA IL POST</strong></h1>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-primary">Ritorna alla lista completa</a>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                    @csrf
                    {{-- inserito il metodo PUT come da route List --}}
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label class="contol-lable">Titolo</label>
                        <input class="form-control @error('title')is-invalid @enderror" type="text" name="title"
                            id="title" placeholder="Titolo" value="{{ old('title') ?? $post->title }}">
                        @error('title')
                            <div class="text-danger">{{ $messages }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label class="contol-lable">Contenuto</label>
                        <textarea class="form-control @error('content')is-invalid @enderror" name="content" id="content"
                            placeholder="Contenuto" value="{{ old('content') ?? $post->content }}"></textarea>
                    </div>
                    <div class="form-group
                            mt-4">
                        <button class="btn btn-sm btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
