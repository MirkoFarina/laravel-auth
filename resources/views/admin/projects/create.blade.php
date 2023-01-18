@extends('layouts.admin')
@section('title')
    | CREATE
@endsection

@section('content')
    <div class="container secondary-color">
        <div class="mb-5 text-center">
            <h1>
                AGGIUNGI NUOVO ELEMENTO
            </h1>
            <a class="btn btn-info" href=" {{ route('admin.project.index') }} ">
                TABELLA PROGETTI
            </a>
        </div>
        <form action=" {{ route('admin.project.store') }} " method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label @error('name') text-danger @enderror">TITOLO *</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name"
                    value=" {{ old('name') }} " placeholder="titolo ..">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="client_name" class="form-label @error('client_name') text-danger @enderror">CLIENT *</label>
                <input type="text" class="form-control @error('client_name') is-invalid @enderror" id="client_name"
                    name="client_name" value=" {{ old('client_name') }} " placeholder="client .. ">
                @error('client_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label @error('cover_image') text-danger @enderror">URL image *</label>
                <input type="text" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                    name="cover_image" value=" {{ old('cover_image') }} " placeholder="URL ... ">
                @error('cover_image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="summary" class="form-label">Descrizione: </label>
                <textarea class="form-control" id="summary" name="summary" rows="3">{{ old('summary') }}
                </textarea>
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-success" type="submit"> INVIA </button>
            </div>
        </form>
    </div>
@endsection