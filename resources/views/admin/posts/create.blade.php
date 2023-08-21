@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">AGGINGI NUOVO POST</h1>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-primary">Ritorna alla lista completa</a>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="contol-lable">Titolo</label>
                        <input class="form-control" type="text" name="title" id="title" placeholder="Titolo">
                    </div>
                    <div class="form-group mt-4">
                        <label class="contol-lable">Contenuto</label>
                        <textarea class="form-control" name="content" id="content" placeholder="Contenuto"></textarea>
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-sm btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
