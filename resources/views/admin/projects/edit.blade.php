@extends('layouts.admin')
@section('title')
    | EDIT
@endsection

@section('content')
    <div class="container secondary-color">
        <div class="mb-5 text-center">
            <h1>
                MODIFICA {{ $project->name }}
            </h1>
            <a class="btn btn-success" href="{{ route('admin.project.create') }}">
                <i class="fa-solid fa-plus"></i>
            </a>
            <a class="btn btn-primary" href=" {{ route('admin.project.show', $project) }} ">
                <i class="fa-regular fa-eye"></i>
            </a>
            <a class="btn btn-info" href=" {{ route('admin.project.index') }} ">
                TABELLA PROGETTI
            </a>
            @include('admin.partials.form-delete', [ 'title' => $project->name, 'route' => 'admin.project.destroy', 'element'=> $project])
        </div>
        <form action=" {{ route('admin.project.update', $project) }} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label @error('name') text-danger @enderror">TITOLO *</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name"
                    value=" {{ old('name', $project->name) }} " placeholder="titolo ..">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="client_name" class="form-label @error('client_name') text-danger @enderror">CLIENT *</label>
                <input type="text" class="form-control @error('client_name') is-invalid @enderror" id="client_name"
                    name="client_name" value=" {{ old('client_name', $project->client_name) }} " placeholder="client .. ">
                @error('client_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label @error('cover_image') text-danger @enderror">URL image *</label>
                <input type="text" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                    name="cover_image" value=" {{ old('cover_image',$project->cover_image) }} " placeholder="URL ... ">
                @error('cover_image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="summary" class="form-label">Descrizione: </label>
                <textarea class="form-control" id="summary" name="summary" rows="3">{{ old('summary',$project->summary) }}
                </textarea>
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-success" type="submit"> INVIA </button>
            </div>
        </form>
    </div>
@endsection
